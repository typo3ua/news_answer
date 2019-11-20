<?php
defined('TYPO3_MODE') or die();

// Override topics icon
$GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
    0 => 'LLL:EXT:news_answer/Resources/Private/Language/locallang_be.xlf:t3ua.topics.folder',
    1 => 'topics',
    2 => 'apps-pagetree-folder-contains-news'
];