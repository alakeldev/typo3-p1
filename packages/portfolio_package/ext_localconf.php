<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '@import "EXT:portfolio_package/Configuration/PageTS/Mod/Wizards/NewContentElement.tsconfig"'
);


# it's related to the ContactController *Contact Form
// \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
//     'PortfolioPackage',
//     'Pi1',
//     [
//         \PortfolioPackage\Controller\ContactController::class => 'send,thankyou'
//     ],
//     // non-cacheable actions
//     [
//         \PortfolioPackage\Controller\ContactController::class => 'send'
//     ]
// );