<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php

use Bitrix\Main\Page\Asset;

$APPLICATION->SetPageProperty("title", "Блог");

?>

<!DOCTYPE html>

<html lang="ru">
<head>
    <title><?
        $APPLICATION->ShowTitle(); ?></title>
    <?php
    $APPLICATION->ShowHead();
    Asset::getInstance()->addCss($APPLICATION->GetTemplatePath('css/bootstrap.min.css'));
    Asset::getInstance()->addCss($APPLICATION->GetTemplatePath('css/fonts.css'));
    Asset::getInstance()->addCss($APPLICATION->GetTemplatePath('css/blog.css'));
    Asset::getInstance()->addJs($APPLICATION->GetTemplatePath('js/jquery-3.2.1.slim.min.js'));
    Asset::getInstance()->addJs($APPLICATION->GetTemplatePath('js/jquery-slim.min.js'));
    Asset::getInstance()->addJs($APPLICATION->GetTemplatePath('js/popper.min.js'));
    Asset::getInstance()->addJs($APPLICATION->GetTemplatePath('js/bootstrap.min.js'));
    Asset::getInstance()->addJs($APPLICATION->GetTemplatePath('js/holder.min.js'));
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
</head>

<body>

<div id="panel">
    <?php
    $APPLICATION->ShowPanel(); ?>
</div>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/"><?php
                    $APPLICATION->ShowTitle(); ?></a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="/kontakty/">
                    Обратная связь
                </a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "categories",
                array(
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "COMPONENT_TEMPLATE" => "categoties",
                    "COUNT_ELEMENTS" => "Y",
                    "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
                    "FILTER_NAME" => "sectionsFilter",
                    "IBLOCK_ID" => "4",
                    "IBLOCK_TYPE" => "novosti",
                    "SECTION_CODE" => "",
                    "SECTION_FIELDS" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SECTION_URL" => "#SITE_DIR#/novosti/#SECTION_CODE#/",
                    "SECTION_USER_FIELDS" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SHOW_PARENT_NAME" => "Y",
                    "TOP_DEPTH" => "2",
                    "VIEW_MODE" => "LINE"
                ),
                false
            ); ?>
        </nav>
    </div>


    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news.detail",
        "main_news",
        array(
            "ACTIVE_DATE_FORMAT" => "j F Y",    // Формат показа даты
            "ADD_ELEMENT_CHAIN" => "N",    // Включать название элемента в цепочку навигации
            "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
            "AJAX_MODE" => "N",    // Включить режим AJAX
            "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
            "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
            "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
            "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
            "BROWSER_TITLE" => "-",    // Установить заголовок окна браузера из свойства
            "CACHE_GROUPS" => "Y",    // Учитывать права доступа
            "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
            "CACHE_TYPE" => "A",    // Тип кеширования
            "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
            "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
            "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
            "DISPLAY_DATE" => "Y",    // Выводить дату элемента
            "DISPLAY_NAME" => "Y",    // Выводить название элемента
            "DISPLAY_PICTURE" => "Y",    // Выводить детальное изображение
            "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
            "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
            "ELEMENT_CODE" => "",    // Код новости
            "ELEMENT_ID" => "13",    // ID новости
            "FIELD_CODE" => array(    // Поля
                0 => "",
                1 => "",
            ),
            "IBLOCK_ID" => "4",    // Код информационного блока
            "IBLOCK_TYPE" => "novosti",    // Тип информационного блока (используется только для проверки)
            "IBLOCK_URL" => "",    // URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
            "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
            "META_DESCRIPTION" => "-",    // Установить описание страницы из свойства
            "META_KEYWORDS" => "-",    // Установить ключевые слова страницы из свойства
            "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
            "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
            "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
            "PAGER_TITLE" => "Страница",    // Название категорий
            "PROPERTY_CODE" => array(    // Свойства
                0 => "",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
            "SET_CANONICAL_URL" => "N",    // Устанавливать канонический URL
            "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
            "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
            "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
            "SET_STATUS_404" => "N",    // Устанавливать статус 404
            "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
            "SHOW_404" => "N",    // Показ специальной страницы
            "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа элемента
            "USE_PERMISSIONS" => "N",    // Использовать дополнительное ограничение доступа
            "USE_SHARE" => "N",    // Отображать панель соц. закладок
            "COMPONENT_TEMPLATE" => ".default"
        ),
        false
    );
    ?>
    <div class="row mb-2">
        <?
        $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "submain_news",
            array(
                "ACTIVE_DATE_FORMAT" => "j F Y",    // Формат показа даты
                "ADD_ELEMENT_CHAIN" => "N",    // Включать название элемента в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "BROWSER_TITLE" => "-",    // Установить заголовок окна браузера из свойства
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить детальное изображение
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "ELEMENT_CODE" => "",    // Код новости
                "ELEMENT_ID" => "9",    // ID новости
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "IBLOCK_ID" => "4",    // Код информационного блока
                "IBLOCK_TYPE" => "novosti",    // Тип информационного блока (используется только для проверки)
                "IBLOCK_URL" => "",    // URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "META_DESCRIPTION" => "-",    // Установить описание страницы из свойства
                "META_KEYWORDS" => "-",    // Установить ключевые слова страницы из свойства
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "Страница",    // Название категорий
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                "SET_CANONICAL_URL" => "N",    // Устанавливать канонический URL
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа элемента
                "USE_PERMISSIONS" => "N",    // Использовать дополнительное ограничение доступа
                "USE_SHARE" => "N",    // Отображать панель соц. закладок
                "COMPONENT_TEMPLATE" => ".default"
            ),
            false
        );
        $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "submain_news",
            array(
                "ACTIVE_DATE_FORMAT" => "j F Y",    // Формат показа даты
                "ADD_ELEMENT_CHAIN" => "N",    // Включать название элемента в цепочку навигации
                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",    // Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                "BROWSER_TITLE" => "-",    // Установить заголовок окна браузера из свойства
                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                "CACHE_TYPE" => "A",    // Тип кеширования
                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                "DISPLAY_PICTURE" => "Y",    // Выводить детальное изображение
                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                "ELEMENT_CODE" => "",    // Код новости
                "ELEMENT_ID" => "10",    // ID новости
                "FIELD_CODE" => array(    // Поля
                    0 => "",
                    1 => "",
                ),
                "IBLOCK_ID" => "4",    // Код информационного блока
                "IBLOCK_TYPE" => "novosti",    // Тип информационного блока (используется только для проверки)
                "IBLOCK_URL" => "",    // URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",    // Включать инфоблок в цепочку навигации
                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                "META_DESCRIPTION" => "-",    // Установить описание страницы из свойства
                "META_KEYWORDS" => "-",    // Установить ключевые слова страницы из свойства
                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                "PAGER_TITLE" => "Страница",    // Название категорий
                "PROPERTY_CODE" => array(    // Свойства
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                "SET_CANONICAL_URL" => "N",    // Устанавливать канонический URL
                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                "SHOW_404" => "N",    // Показ специальной страницы
                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа элемента
                "USE_PERMISSIONS" => "N",    // Использовать дополнительное ограничение доступа
                "USE_SHARE" => "N",    // Отображать панель соц. закладок
                "COMPONENT_TEMPLATE" => ".default"
            ),
            false
        );
        ?>
    </div>
</div>

<main role="main" class="container">

<?php

    CIBlockElement::GetList();