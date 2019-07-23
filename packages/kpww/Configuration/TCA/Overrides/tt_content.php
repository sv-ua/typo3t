<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['slider_slider'] = 'tx_slider_slider';
    $tempColumns = array (
        'tx_slider_slide' =>
            array (
                'config' =>
                    array (
                        'appearance' =>
                            array (
                                'enabledControls' =>
                                    array (
                                        'dragdrop' => '1',
                                    ),
                                'levelLinksPosition' => 'top',
                            ),
                        'foreign_field' => 'parentid',
                        'foreign_sortby' => 'sorting',
                        'foreign_table' => 'tx_slider_slide',
                        'foreign_table_field' => 'parenttable',
                        'type' => 'inline',
                    ),
                'exclude' => '1',
                'l10n_mode' => 'copy',
                'label' => 'LLL:EXT:kpww/Resources/Private/Language/locallang_db.xlf:tt_content.tx_slider_slide',
            ),
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
        'LLL:EXT:kpww/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._slider_',
        '--div--',
    ];
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
        'LLL:EXT:kpww/Resources/Private/Language/locallang_db.xlf:tt_content.CType.slider_slider',
        'slider_slider',
        'tx_slider_slider',
    ];
    $tempTypes = array (
        'slider_slider' =>
            array (
                'columnsOverrides' =>
                    array (
                        'bodytext' =>
                            array (
                                'config' =>
                                    array (
                                        'richtextConfiguration' => 'default',
                                        'enableRichtext' => 1,
                                    ),
                            ),
                    ),
                'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_slider_slide,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
            ),
    );
    $GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'slider',
        'Configuration/TypoScript/',
        'slider'
    );

});