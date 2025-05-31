<?php

$EM_CONF['portfolio_package'] = [
    'title' => 'portfolio_package',
    'description' => 'A portfolio site with custom content elements',
    'category' => 'templates',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Alakel\\PortfolioPackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Abdullah Alakel',
    'author_email' => 'abdullah.k.alakel@gmail.com',
];