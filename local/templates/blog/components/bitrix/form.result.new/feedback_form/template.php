<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<h3 class="pb-3 mb-4 font-italic border-bottom">
    <?=$arResult['FORM_TITLE'] ?>
</h3>

<? if ($arResult["isFormNote"] === "Y"): ?>
    Спасибо, ваша заявка принята!
<? else: ?>
<div class="form-group">
    <?=$arResult["FORM_HEADER"]?>
    <div class="error-msg"></div>
    <input type="hidden" name="web_form_submit" value="Y">

    <? if ($arResult["isFormErrors"] === "Y"): ?>
        <div class="errors">
            <?=$arResult["FORM_ERRORS_TEXT"]?>
        </div>
    <? endif; ?>

    <?=$arResult["QUESTIONS"]['NAME']['CAPTION']?>
    <?=($arResult["QUESTIONS"]['NAME']['REQUIRED'] === 'Y' ? ' *' : '')?>:
    <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['NAME'], $arResult['arrVALUES'])?><br>

    <?=$arResult["QUESTIONS"]['PHONE']['CAPTION']?>
    <?=($arResult["QUESTIONS"]['PHONE']['REQUIRED'] === 'Y' ? ' *' : '')?>:
    <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['PHONE'], $arResult['arrVALUES'])?><br>

    <?=$arResult["QUESTIONS"]['MESSAGE']['CAPTION']?>
    <?=($arResult["QUESTIONS"]['MESSAGE']['REQUIRED'] === 'Y' ? ' *' : '')?>:
    <?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['MESSAGE'], $arResult['arrVALUES'])?><br>

    <input type="submit" value="<?=$arResult["arForm"]["BUTTON"]?>" class="btn btn-primary">

    <?=$arResult["FORM_FOOTER"]?>
</div>
<? endif; ?>

<script>
    ajaxForm(document.getElementsByName('<?=$arResult['arForm']['SID']?>')[0], '<?=$templateFolder?>/ajax.php')
</script>
