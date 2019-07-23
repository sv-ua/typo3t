<?php
return array (
    'ctrl' =>
        array (
            'title' => 'LLL:EXT:kpww/Resources/Private/Language/locallang_db.xlf:tx_slider_slide',
            'label' => 'tx_slider_header',
            'tstamp' => 'tstamp',
            'crdate' => 'crdate',
            'cruser_id' => 'cruser_id',
            'dividers2tabs' => true,
            'versioningWS' => true,
            'languageField' => 'sys_language_uid',
            'transOrigPointerField' => 'l10n_parent',
            'transOrigDiffSourceField' => 'l10n_diffsource',
            'delete' => 'deleted',
            'enablecolumns' =>
                array (
                    'disabled' => 'hidden',
                    'starttime' => 'starttime',
                    'endtime' => 'endtime',
                ),
            'searchFields' => 'tx_slider_header,tx_slider_image',
            'dynamicConfigFile' => '',
            'iconfile' => 'EXT:kpww/Resources/Public/Icons/Extension.png',
            'hideTable' => true,
        ),
    'interface' =>
        array (
            'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, tx_slider_header, tx_slider_image',
        ),
    'types' =>
        array (
            1 =>
                array (
                    'showitem' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,tx_slider_header,tx_slider_image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,starttime,endtime',
                ),
        ),
    'palettes' =>
        array (
            1 =>
                array (
                    'showitem' => '',
                ),
        ),
    'columns' =>
        array (
            'sys_language_uid' =>
                array (
                    'exclude' => 1,
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
                    'config' =>
                        array (
                            'type' => 'select',
                            'renderType' => 'selectSingle',
                            'items' =>
                                array (
                                    0 =>
                                        array (
                                            0 => 'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                                            1 => -1,
                                            2 => 'flags-multiple',
                                        ),
                                ),
                            'special' => 'languages',
                            'default' => 0,
                        ),
                ),
            'l10n_parent' =>
                array (
                    'displayCond' => 'FIELD:sys_language_uid:>:0',
                    'exclude' => 1,
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
                    'config' =>
                        array (
                            'type' => 'select',
                            'renderType' => 'selectSingle',
                            'items' =>
                                array (
                                    0 =>
                                        array (
                                            0 => '',
                                            1 => 0,
                                        ),
                                ),
                            'foreign_table' => 'tx_slider_slide',
                            'foreign_table_where' => 'AND tx_slider_slide.pid=###CURRENT_PID### AND tx_slider_slide.sys_language_uid IN (-1,0)',
                            'default' => 0,
                        ),
                ),
            'l10n_diffsource' =>
                array (
                    'config' =>
                        array (
                            'type' => 'passthrough',
                        ),
                ),
            't3ver_label' =>
                array (
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
                    'config' =>
                        array (
                            'type' => 'input',
                            'size' => 30,
                            'max' => 255,
                        ),
                ),
            'hidden' =>
                array (
                    'exclude' => 1,
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
                    'config' =>
                        array (
                            'type' => 'check',
                        ),
                ),
            'starttime' =>
                array (
                    'exclude' => 1,
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
                    'config' =>
                        array (
                            'behaviour' =>
                                array (
                                    'allowLanguageSynchronization' => true,
                                ),
                            'renderType' => 'inputDateTime',
                            'type' => 'input',
                            'size' => 13,
                            'eval' => 'datetime,int',
                            'checkbox' => 0,
                            'default' => 0,
                        ),
                ),
            'endtime' =>
                array (
                    'exclude' => 1,
                    'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
                    'config' =>
                        array (
                            'behaviour' =>
                                array (
                                    'allowLanguageSynchronization' => true,
                                ),
                            'renderType' => 'inputDateTime',
                            'type' => 'input',
                            'size' => 13,
                            'eval' => 'datetime,int',
                            'checkbox' => 0,
                            'default' => 0,
                        ),
                ),
            'parentid' =>
                array (
                    'config' =>
                        array (
                            'type' => 'select',
                            'renderType' => 'selectSingle',
                            'items' =>
                                array (
                                    0 =>
                                        array (
                                            0 => '',
                                            1 => 0,
                                        ),
                                ),
                            'foreign_table' => 'tt_content',
                            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,###REC_FIELD_sys_language_uid###)',
                        ),
                ),
            'parenttable' =>
                array (
                    'config' =>
                        array (
                            'type' => 'passthrough',
                        ),
                ),
            'sorting' =>
                array (
                    'config' =>
                        array (
                            'type' => 'passthrough',
                        ),
                ),
            'tx_slider_header' =>
                array (
                    'config' =>
                        array (
                            'type' => 'input',
                        ),
                    'exclude' => '1',
                    'label' => 'LLL:EXT:kpww/Resources/Private/Language/locallang_db.xlf:tx_slider_slide.tx_slider_header',
                    'order' => 1,
                ),
            'tx_slider_image' =>
                array (
                    'config' =>
                        array (
                            'type' => 'inline',
                            'foreign_table' => 'sys_file_reference',
                            'foreign_field' => 'uid_foreign',
                            'foreign_sortby' => 'sorting_foreign',
                            'foreign_table_field' => 'tablenames',
                            'foreign_match_fields' =>
                                array (
                                    'fieldname' => 'tx_slider_image',
                                ),
                            'foreign_label' => 'uid_local',
                            'foreign_selector' => 'uid_local',
                            'overrideChildTca' =>
                                array (
                                    'columns' =>
                                        array (
                                            'uid_local' =>
                                                array (
                                                    'config' =>
                                                        array (
                                                            'appearance' =>
                                                                array (
                                                                    'elementBrowserType' => 'file',
                                                                    'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                                                                ),
                                                        ),
                                                ),
                                        ),
                                    'types' =>
                                        array (
                                            0 =>
                                                array (
                                                    'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                                                ),
                                            1 =>
                                                array (
                                                    'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                                                ),
                                            2 =>
                                                array (
                                                    'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                                                ),
                                            3 =>
                                                array (
                                                    'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                                                ),
                                            4 =>
                                                array (
                                                    'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                                                ),
                                            5 =>
                                                array (
                                                    'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                                                ),
                                        ),
                                ),
                            'filter' =>
                                array (
                                    0 =>
                                        array (
                                            'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                                        ),
                                ),
                            'appearance' =>
                                array (
                                    'useSortable' => 'tx_slider_image',
                                    'headerThumbnail' =>
                                        array (
                                            'field' => 'uid_local',
                                            'width' => '45',
                                            'height' => '45c',
                                        ),
                                    'enabledControls' =>
                                        array (
                                            'info' => 'tx_slider_image',
                                            'new' => false,
                                            'dragdrop' => 'tx_slider_image',
                                            'sort' => false,
                                            'hide' => 'tx_slider_image',
                                            'delete' => 'tx_slider_image',
                                        ),
                                    'fileUploadAllowed' => false,
                                ),
                            'behaviour' =>
                                array (
                                    'localizeChildrenAtParentLocalization' => 'tx_slider_image',
                                ),
                            'maxitems' => '1',
                            'minitems' => '1',
                        ),
                    'exclude' => '1',
                    'l10n_mode' => 'copy',
                    'label' => 'LLL:EXT:kpww/Resources/Private/Language/locallang_db.xlf:tx_slider_slide.tx_slider_image',
                    'order' => 2,
                ),
        ),
);