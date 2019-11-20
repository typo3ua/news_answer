<?php
defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:news_answer/Resources/Private/Language/locallang_db.xlf:';

$configuration = \T3UA\NewsAnswer\Utility\EmConfiguration::getSettings();

$fields = [
    'content_elements_answer' => [
        'exclude' => true,
        'label' => $ll . 'tx_news_domain_model_news.content_elements_answer',
        'config' => [
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'tx_news_related_news_answer',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => [
                //'useXclassedVersion' => $configuration->getContentElementAnswerPreview(),
                'useXclassedVersion' => false,
                'collapseAll' => true,
                'expandSingle' => true,
                'levelLinksPosition' => 'bottom',
                'useSortable' => true,
                'showPossibleLocalizationRecords' => true,
                'showRemovedLocalizationRecords' => true,
                'showAllLocalizationLink' => true,
                'showSynchronizationLink' => true,
                'enabledControls' => [
                    'info' => false,
                ]
            ],
            'behaviour' => [
                'allowLanguageSynchronization' => true,
            ],
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $fields);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 'content_elements_answer', '', 'after:content_elements');

if (!$configuration->getContentElementAnswerRelation()) {
    unset($tx_news_domain_model_news['columns']['content_elements_answer']);
}

return $tx_news_domain_model_news;