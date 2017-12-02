<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'T3IN.T3inWordlink',
                'web', // Make module a submodule of 'web'
                'link', // Submodule key
                '', // Position
                [
                    'WordLink' => 'start',
                    
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:t3in_wordlink/Resources/Public/Icons/user_mod_link.svg',
                    'labels' => 'LLL:EXT:t3in_wordlink/Resources/Private/Language/locallang_link.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3in_wordlink', 'Configuration/TypoScript', 'T3IN - Add Url to Words');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3inwordlink_domain_model_wordconfig', 'EXT:t3in_wordlink/Resources/Private/Language/locallang_csh_tx_t3inwordlink_domain_model_wordconfig.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3inwordlink_domain_model_wordconfig');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3inwordlink_domain_model_index', 'EXT:t3in_wordlink/Resources/Private/Language/locallang_csh_tx_t3inwordlink_domain_model_index.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3inwordlink_domain_model_index');

    }
);
