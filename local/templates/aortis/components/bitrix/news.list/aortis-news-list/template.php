<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$counter = 0;
?>

<div class="news__items">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="news__item  <?= $counter < 2 ? 'horizont' : 'vertical'; ?>"
             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                <div class="news__item-img"
                     style="background-image: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>);"></div>
            <? endif ?>

            <div class="news__item-cover">
                <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                    <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                        <a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>" class="news__item-title">
                            <? echo $arItem["NAME"] ?>
                        </a>
                    <? else: ?>
                        <span class="news__item-title"><? echo $arItem["NAME"] ?></span>
                    <? endif; ?>
                <? endif; ?>

                <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                    <div class="news__item-description">
                        <? echo $arItem["PREVIEW_TEXT"]; ?>
                    </div>
                <? endif; ?>

                <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <div class="news__item-button button">
                        <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">ПОДРОБНЕЕ</a>
                    </div>
                <?php endif; ?>
            </div>

            <?php
            $counter++;
            if ($counter > 3) {
                $counter = 0;
            }
            ?>

        </div>
    <? endforeach; ?>
</div>


