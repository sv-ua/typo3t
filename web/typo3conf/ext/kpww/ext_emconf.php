<?php

/**
 * Extension Manager/Repository config file for ext "kpww".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'KPWW',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Kpww\\Kpww\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'SSVV',
    'author_email' => 'sergey.voronov@gmail.com',
    'author_company' => 'KPWW',
    'version' => '1.0.0',
];
