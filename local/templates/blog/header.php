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
    <?php
    $APPLICATION->ShowHead();
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/bootstrap.min.css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/css');
    Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/blog.css');
    Asset::getInstance()->addString('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
    Asset::getInstance()->addString(
        '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">'
    );
    Asset::getInstance()->addString('<meta name="description" content="">');
    Asset::getInstance()->addString('<meta name="author" content="">');
    Asset::getInstance()->addString('<link rel="icon" href="' . DEFAULT_TEMPLATE_PATH . '/favicon.ico">');
    //Asset::getInstance()->addString('<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">');
    ?>
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
                <a class="text-muted" href="https://getbootstrap.com/docs/4.0/examples/blog/#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="mx-3">
                        <circle cx="10.5" cy="10.5" r="7.5"></circle>
                        <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:catalog.section.list",
                "categoties",
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
                    "IBLOCK_ID" => "8",
                    "IBLOCK_TYPE" => "blog",
                    "SECTION_CODE" => "",
                    "SECTION_FIELDS" => array(
                        0 => "",
                        1 => "",
                    ),
                    "SECTION_ID" => $_REQUEST["SECTION_ID"],
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
    if (CModule::IncludeModule('iblock')) {
        $arSort = array("NAME" => "ASC");
        $arSelect = array("ID", "NAME", "PREVIEW_TEXT", "DETAIL_PAGE_URL", "PREVIEW_PICTURE");
        $arFilter = array(
            "IBLOCK_ID" => 8,
            "NAME" => "Создание блога"
        );

        $blogCreationNews = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
        $blogCreationProperties = $blogCreationNews->GetNextElement()->GetFields();
        ?>

        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic"><?
                    echo $blogCreationProperties['NAME'] ?></h1>
                <p class="lead my-3"><?
                    echo $blogCreationProperties['PREVIEW_TEXT'] ?></p>
                <p class="lead mb-0"><a href="<?
                    echo $blogCreationProperties['DETAIL_PAGE_URL'] ?>/"
                                        class="text-white font-weight-bold">Продолжить чтение...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <?
            $arFilter['NAME'] = "Одна важная запись";

            $first = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
            $firstProperties = $first->GetNextElement()->GetFields();
            ?>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            <a class="text-dark" href="https://getbootstrap.com/docs/4.0/examples/blog/#"><?
                                echo $firstProperties['NAME'] ?><a>
                        </h3>
                        <div class="mb-1 text-muted">
                            <?
                            $firstProperties["DATE_CREATE"] = "j F";
                            echo CIBlockFormatProperties::DateFormat(
                                $firstProperties["DATE_CREATE"],
                                MakeTimeStamp(
                                    $arElement["DATE_CREATE"],
                                    CSite::GetDateFormat()
                                )
                            );
                            ?>
                        </div>
                        <p class="card-text mb-auto"><?
                            echo $firstProperties['PREVIEW_TEXT'] ?></p>
                        <a href="<?
                        echo $firstProperties['DETAIL_PAGE_URL'] ?>/">Продолжить чтение...</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block"
                         alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                         src="<?
                         echo CFile::GetPath($firstProperties['PREVIEW_PICTURE']) ?>"
                         data-holder-rendered="true">
                </div>
            </div>
            <?
            $arFilter['NAME'] = "Другая важная запись";

            $second = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
            $secondProperties = $second->GetNextElement()->GetFields();
            ?>
            <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                            <a class="text-dark" href="https://getbootstrap.com/docs/4.0/examples/blog/#"><?
                                echo $secondProperties['NAME'] ?><a>
                        </h3>
                        <div class="mb-1 text-muted">
                            <?
                            $secondProperties["DATE_CREATE"] = "j F";
                            echo CIBlockFormatProperties::DateFormat(
                                $firstProperties["DATE_CREATE"],
                                MakeTimeStamp(
                                    $arElement["DATE_CREATE"],
                                    CSite::GetDateFormat()
                                )
                            );
                            ?>
                        </div>
                        <p class="card-text mb-auto"><?
                            echo $secondProperties['PREVIEW_TEXT'] ?></p>
                        <a href="<?
                        echo $secondProperties['DETAIL_PAGE_URL'] ?>/">Продолжить чтение...</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-md-block"
                         alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                         src="<?
                         echo CFile::GetPath($secondProperties['PREVIEW_PICTURE']) ?>"
                         data-holder-rendered="true">
                </div>
            </div>
        </div>

        <?
    }
    ?>
</div>

<main role="main" class="container">