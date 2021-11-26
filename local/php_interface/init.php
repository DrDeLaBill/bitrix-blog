<?php

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
        $addedStr = '[не активно]';
        if ($arFields['ACTIVE'] == 'N') {
            $arFields['NAME'] = $addedStr . $arFields['NAME'];
        } else {
            $arFields['NAME'] = str_replace($addedStr, "", $arFields['NAME']);
        }
    }
}