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
<div class="row my-3">
	<?if(is_array($arResult["DETAIL_PICTURE"])):?>
    <div class="col-sm-4">
		<img
            class="rounded float-left"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="300px"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
    </div>
	<?endif?>
    <div class="col">
        <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
            <h3><?=$arResult["NAME"]?></h3>
        <?endif;?>

        <p class="blog-post-meta">
            <? echo CIBlockFormatProperties::DateFormat(
                    $arParams["ACTIVE_DATE_FORMAT"],
                    MakeTimeStamp(
                            $arElement["DATE_CREATE"],
                            CSite::GetDateFormat()
                    )
            );?>
        </p>
        <?if($arResult["DETAIL_TEXT"] <> ''):?>
            <?echo $arResult["DETAIL_TEXT"];?>
        <?endif?>
        </pre>
    </div>
</div>