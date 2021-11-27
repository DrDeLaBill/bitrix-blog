<?php

require dirname(__FILE__) . '/constants.php';

AddEventHandler('iblock', 'OnBeforeIBlockElementUpdate', Array(
    'NewsHandler',
    'onBeforeIBlockElementUpdateHandler'
));
AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', Array(
    'NewsHandler',
    'onBeforeIBlockElementUpdateHandler'
));

class NewsHandler {
    function onBeforeIBlockElementUpdateHandler(&$arFields) {
        if ($arFields['IBLOCK_ID'] == NOVOSTI_ID) {
            $noneActiveStr = '[не активно]';
            if ($arFields['ACTIVE'] == 'N') {
                $arFields['NAME'] = $noneActiveStr . $arFields['NAME'];
            } else {
                $arFields['NAME'] = str_replace($noneActiveStr, "", $arFields['NAME']);
            }
        }
    }
}