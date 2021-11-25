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
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?
if (empty($arResult['ITEMS'])) {
    echo '<p class="blog-post-meta">Нет новостей</p>';
}
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <h2 class="blog-post-title">
        <a href="<?
        echo $arItem["DETAIL_PAGE_URL"] ?>">
            <?
            echo $arItem["NAME"] ?>
        </a>
    </h2>
    <p class="blog-post-meta">
        <?
        $arParams["DATE_CREATE"] = "j F Y";
        echo CIBlockFormatProperties::DateFormat(
            $arParams["DATE_CREATE"],
            MakeTimeStamp(
                $arElement["DATE_CREATE"],
                CSite::GetDateFormat()
            )
        ); ?>
    </p>
    <p>
        <?
        echo $arItem["PREVIEW_TEXT"] ?>
    </p>
    <hr>
<?endforeach;?>
    <div class="pager">
        <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
            <br /><?=$arResult["NAV_STRING"]?>
        <?endif;?>
    </div>
</div>
