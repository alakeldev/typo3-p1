<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Define an array with your custom content elements
$elements = [
    [
        'label'  => 'Header',
        'value'  => 'portfolio_header',
        'icon'   => 'EXT:portfolio_package/Resources/Public/Icons/ce_header.svg',
        'fields' => '--palette--;;headers,',
    ],
    [
        'label'  => 'Hero Section',
        'value'  => 'portfolio_hero',
        'icon'   => 'EXT:portfolio_package/Resources/Public/Icons/ce_hero.svg',
        'fields' => '--palette--;;headers, bodytext, image, link,',
    ],
    [
        'label'  => 'About Block',
        'value'  => 'portfolio_aboutblock',
        'icon'   => 'EXT:portfolio_package/Resources/Public/Icons/ce_aboutblock.svg',
        'fields' => '--palette--;;headers, bodytext,',
    ],
    [
        'label'  => 'Project Item',
        'value'  => 'portfolio_projectitem',
        'icon'   => 'EXT:portfolio_package/Resources/Public/Icons/ce_projectitem.svg',
        'fields' => '--palette--;;headers, bodytext, image, link,',
    ],
    [
        'label'  => 'Contact Block',
        'value'  => 'portfolio_contactblock',
        'icon'   => 'EXT:portfolio_package/Resources/Public/Icons/ce_contactblock.svg',
        'fields' => '--palette--;;headers, bodytext,',
    ],
    [
        'label'  => 'Footer',
        'value'  => 'portfolio_footer',
        'icon'   => 'EXT:portfolio_package/Resources/Public/Icons/ce_footer.svg',
        'fields' => '--palette--;;headers,',
    ],
];

// Loop through and add each element to the tt_content CType dropdown
foreach ($elements as $element) {
    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content', // The table you want to add the item to.
        'CType',     // The field (content type) to modify.
        [
            $element['label'],  // The label shown in the backend.
            $element['value'],  // The internal value.
            $element['icon'] ?? null, // Your custom icon.
            'default'
        ],
        'textmedia', // The item to position your custom element after.
        'after'
    );

    // Define which fields appear when this element is selected
    $GLOBALS['TCA']['tt_content']['types'][$element['value']] = [
        'showitem' => $element['fields'],
    ];
}