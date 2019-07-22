<?php
namespace IchHabRecht\MaskExport\Aggregate;

/*
 * This file is part of the TYPO3 extension mask_export.
 *
 * (c) 2016 Nicole Cordes <typo3@cordes.co>, CPS-IT GmbH
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extensionmanager\Utility\EmConfUtility;

class ExtensionConfigurationAggregate extends AbstractAggregate implements PhpAwareInterface, PlainTextFileAwareInterface
{
    use PhpAwareTrait;
    use PlainTextFileAwareTrait;

    /**
     * Adds typical extension files
     */
    protected function process()
    {
        $this->addExtEmconf();
        $this->addComposerJson();
        $this->addExtIcon();
        $this->addMaskConfiguration();
    }

    /**
     * Adds ext_emconf.php file
     */
    protected function addExtEmconf()
    {
        $emConfUtility = GeneralUtility::makeInstance(EmConfUtility::class);
        $extensionData = [
            'extKey' => 'mask',
            'EM_CONF' => [
                'title' => 'mask',
                'description' => '',
                'category' => 'fe',
                'author' => '',
                'author_email' => '',
                'author_company' => '',
                'state' => 'stable',
                'version' => '0.1.0',
                'constraints' => [
                    'depends' => [
                        'typo3' => sprintf('%s.0-%s.99', TYPO3_branch, TYPO3_branch),
                    ],
                    'conflicts' => [],
                    'suggests' => [],
                ],
            ],
        ];

        $this->addPhpFile(
            'ext_emconf.php',
            substr($emConfUtility->constructEmConf($extensionData), 6)
        );
    }

    /**
     * Adds composer.json file
     */
    protected function addComposerJson()
    {
        $composerData = [
            'name' => 'mask/mask',
            'description' => '',
            'type' => 'typo3-cms-extension',
            'license' => 'GPL-2.0-or-later',
            'require' => [
                'typo3/cms-backend' => '^' . TYPO3_branch,
                'typo3/cms-core' => '^' . TYPO3_branch,
                'typo3/cms-extbase' => '^' . TYPO3_branch,
                'typo3/cms-fluid' => '^' . TYPO3_branch,
                'typo3/cms-frontend' => '^' . TYPO3_branch,
            ],
            'replace' => [
                'mask' => 'self.version',
                'typo3-ter/mask' => 'self.version',
            ],
            'autoload' => [
                'psr-4' => [
                    'MASK\\Mask\\' => 'Classes/',
                ],
            ],
            'extra' => [
                'typo3/cms' => [
                    'extension-key' => 'mask',
                ],
            ],
        ];

        $this->addPlainTextFile(
            'composer.json',
            json_encode($composerData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)
        );
    }

    /**
     * Adds ext_icon.png from mask_export extension
     */
    protected function addExtIcon()
    {
        $this->addPlainTextFile(
            'ext_icon.png',
            file_get_contents(ExtensionManagementUtility::extPath('mask_export') . 'ext_icon.png')
        );
        $this->addPlainTextFile(
            'Resources/Public/Icons/Extension.png',
            file_get_contents(ExtensionManagementUtility::extPath('mask_export') . 'ext_icon.png')
        );
    }

    /**
     * Adds mask.josn configuration file
     */
    protected function addMaskConfiguration()
    {
        $maskConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']);
        if (empty($maskConfiguration['json'])) {
            return;
        }

        $jsonFile = GeneralUtility::getFileAbsFileName($maskConfiguration['json']);
        if (file_exists($jsonFile)) {
            $content = file_get_contents($jsonFile);
            $this->addPlainTextFile(
                $this->escapeMaskExtensionKey('Configuration/Mask/mask.json'),
                $this->escapeMaskExtensionKey($content)
            );
        }
    }
}
