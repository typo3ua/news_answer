<?php
defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:news_answer/Resources/Private/Language/locallang_db.xlf:';

call_user_func(function () {

    $fieldOne = [
        'tx_ukrainianpackage_terms' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ukrainian_package/Resources/Private/Language/locallang.xlf:form.i_agree.label',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'labelChecked' => 'Yes',
                        'labelUnchecked' => 'No',
                        'invertStateDisplay' => 0
                    ],
                ],
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fieldOne);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tx_ukrainianpackage_terms', '', 'after:bodytext');

    $fieldTwo = [
        'tt_contentfeuser_user' => [
            'exclude' => true,
            'label' => $ll . 'tt_content.tt_contentfeuser_user',
            'config' => [
                'type' => 'group',
                'internal_type' => 'db',
                'allowed' => 'fe_users',
                'foreign_table' => 'fe_users',
                'size' => 10,
                'minitems' => 0,
                'maxitems' => 1010,
                'default' => '',
                'suggestOptions' => [
                    'type' => 'suggest',
                    'default' => [
                        'searchWholePhrase' => true
                    ]
                ],
            ]
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fieldTwo);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tt_contentfeuser_user', '', 'after:fe_group');

});
