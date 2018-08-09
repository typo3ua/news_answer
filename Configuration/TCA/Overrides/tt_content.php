<?php
defined('TYPO3_MODE') or die();
$fields = [
    'tt_content_feuser_user' => [
        'exclude' => true,
        'label' => 'LLL:EXT:news_feuser/Resources/Private/Language/locallang.xlf:tx_news_domain_model_news.tx_newsfeuser_user',
        'config' => [
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'fe_users',
            'foreign_table' => 'fe_users',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 1010,
            'default' => '',
            'wizards' => [
                'suggest' => [
                    'type' => 'suggest',
                    'default' => [
                        'searchWholePhrase' => true
                    ]
                ],
            ],
        ]
    ]
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'tt_content_feuser_user', '', 'after:fe_group');
