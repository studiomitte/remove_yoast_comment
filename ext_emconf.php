<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Remove header comment of EXT:yoast_seo',
    'description' => 'Remove the hardcoded header comment of EXT:yoast_seo added to the frontend',
    'category' => 'fe',
    'author' => 'The Team of StudioMitte',
    'author_email' => 'office@studiomitte.com',
    'author_company' => 'StudioMitte',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
            'yoast_seo' => '8.0.0-9.9.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'StudioMitte\\RemoveYoastComment\\\\' => 'Classes'
        ]
    ],
];
