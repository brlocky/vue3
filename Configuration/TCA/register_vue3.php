<?php

use Rs\Vue3\Tca\ContentUtils;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Swiss Krono Sticker Grid (DEPRECATED: Use Banner grid instead)',
        'vue3',
        'EXT:vue3/ext_icon.gif'
    ],
    'CType',
    'vue3'
);
$GLOBALS['TCA']['tt_content']['types']['sk_sticker_grid']['showitem'] = ContentUtils::getShowItems([
    'pi_flexform'
]);
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',vue3']
    = 'FILE:EXT:sk/Configuration/FlexForms/vue3.xml';
