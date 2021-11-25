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
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic"><?
            echo $arResult['NAME'] ?>
        </h1>
        <p class="lead my-3"><?
            echo $arResult['PREVIEW_TEXT'] ?>
        </p>
        <p class="lead mb-0">
            <a href="<? echo $arResult['DETAIL_PAGE_URL'] ?>"class="text-white font-weight-bold">
                Продолжить чтение...
            </a>
        </p>
    </div>
</div>