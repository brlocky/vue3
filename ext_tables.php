<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    "vue3",
    "Configuration/TypoScript",
    "Vue3"
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'vue3',
    'Vue3',
    'Vue3 Component'
);