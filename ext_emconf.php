<?php
/**
 * @author Steffen Maechtel <info@steffen-maechtel.de>
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Exception handling for TYPO3_DB',
    'description' => 'TYPO3 CMS extension: Throw exception in case of error instead of show error with DebugUtility::debug',
    'category' => 'misc',
    'version' => '0.0.0-dev',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'author' => 'Steffen Maechtel',
    'author_email' => 'info@steffen-maechtel.de',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.999',
            'php' => '7.0.0-7.2.999'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'SteffenMaechtel\\ExceptionHandlingForTypo3Db\\' => 'Classes'
        ]
    ],
];
