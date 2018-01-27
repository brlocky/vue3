<?php

use RozbehSharahi\Vue3\Tca\ContentUtils;

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'Vue3',
        'vue3',
        'EXT:vue3/ext_icon.gif'
    ],
    'CType',
    'vue3'
);
$GLOBALS['TCA']['tt_content']['types']['vue3']['showitem'] = ContentUtils::getShowItems([
    'pi_flexform'
]);
$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',vue3']
    = 'FILE:EXT:vue3/Configuration/FlexForms/vue3.xml';
