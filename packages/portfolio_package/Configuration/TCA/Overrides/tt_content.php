<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// for the wizard 
ExtensionManagementUtility::addPageTSConfig(
    '@import "EXT:portfolio_package/Configuration/PageTS/Mod/Wizards/NewContentElement.tsconfig"'
);

// Define your custom content elements
$elements = [
    [
        'label'  => 'Header',
        'value'  => 'portfolio_header',
        'icon'   => 'actions-star',
        'fields' => '--palette--;;headers, image,',
        'group'  => 'portfolio_package',
    ],
    [
        'label'  => 'Hero Section',
        'value'  => 'portfolio_hero',
        'icon'   => 'actions-user',
        'fields' => '--palette--;;headers, bodytext, image, link,',
        'group'  => 'portfolio_package',
    ],
    [
        'label'  => 'About Block',
        'value'  => 'portfolio_aboutblock',
        'icon'   => 'actions-briefcase',
        'fields' => '--palette--;;headers, bodytext,',
        'group'  => 'portfolio_package',
    ],
    [
        'label'  => 'Project Item',
        'value'  => 'portfolio_projectitem',
        'icon'   => 'actions-briefcase',
        'fields' => '--palette--;;headers, bodytext, image, link,',
        'group'  => 'portfolio_package',
    ],
    [
        'label'  => 'Contact Block',
        'value'  => 'portfolio_contactblock',
        'icon'   => 'actions-contact',
        'fields' => '--palette--;;headers, bodytext,',
        'group'  => 'portfolio_package',
    ],
    [
        'label'  => 'Footer',
        'value'  => 'portfolio_footer',
        'icon'   => 'actions-link',
        'fields' => '--palette--;;headers,footer_github,footer_linkedin,footer_email,',
        'group'  => 'portfolio_package',
    ],
];

// Add custom fields for the Footer element
ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'footer_github' => [
        'label' => 'GitHub URL',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'footer_linkedin' => [
        'label' => 'LinkedIn URL',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'footer_email' => [
        'label' => 'Email Address',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
]);

// Register the elements in CType dropdown and assign to the group
foreach ($elements as $element) {
    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            $element['label'],
            $element['value'],
            $element['icon'] ?? null,
            $element['group'] ?? null,
        ],
        'textmedia',
        'after'
    );

    // Define which fields appear when this element is selected
    $GLOBALS['TCA']['tt_content']['types'][$element['value']] = [
        'showitem' => $element['fields'],
    ];
}