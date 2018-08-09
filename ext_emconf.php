<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Extend ext:news and tt_content',
    'description' => 'Extend ext:news the new content elements - answer by a relation to a tt_content and tt_content by a relation to a FE User',
    'category' => 'fe',
    'author' => 'Vasyl Mosiychuk',
    'author_email' => 'vasyl@typo3.net.ua',
    'author_company' => 'vasyl.net',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.9.99',
            'news' => '6.0.0-7.9.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
