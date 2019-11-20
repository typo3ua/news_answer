<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'news_answer';
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/TtContent'][] = 'news_answer';

// Hide content elements in list module & filter in administration module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Recordlist\RecordList\DatabaseRecordList::class]['modifyQuery'][] = \T3UA\NewsAnswer\Hooks\Backend\RecordListAnswerQueryHook::class;

// Hide content elements in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Backend\View\PageLayoutView::class]['modifyQuery'][] = \T3UA\NewsAnswer\Hooks\Backend\PageViewAnswerQueryHook::class;