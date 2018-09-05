<?php
defined('TYPO3_MODE') or die();
$ll = 'LLL:EXT:news_answer/Resources/Private/Language/locallang_db.xlf:';
$fields = [
    'tt_content_feuser_user' => [
        'exclude' => true,
        'label' => $ll . 'tt_content.tt_content_feuser_user',
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
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tt_content_feuser_user', '', 'after:fe_group');
