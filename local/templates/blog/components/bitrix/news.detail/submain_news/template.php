<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <h3 class="mb-0">
                <a class="text-dark" href="<?
                echo $arResult['DETAIL_PAGE_URL'] ?>"><?
                    echo $arResult['NAME'] ?><a>
            </h3>
            <div class="mb-1 text-muted">
                <? echo  $arResult["DISPLAY_ACTIVE_FROM"]; ?>
            </div>
            <p class="card-text mb-auto"><?
                echo $arResult['PREVIEW_TEXT'] ?></p>
            <a href="<?
            echo $arResult['DETAIL_PAGE_URL'] ?>">Продолжить чтение...</a>
        </div>
        <img class="card-img-right flex-auto d-none d-md-block"
             alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
             src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
             data-holder-rendered="true">
    </div>
</div>