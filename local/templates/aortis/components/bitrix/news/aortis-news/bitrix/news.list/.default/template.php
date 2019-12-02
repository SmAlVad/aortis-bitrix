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
?>


<div class="wrapper news">
    <div class="main">

        <div class="main__heading heading">
            <h1>НОВОСТИ И СТАТЬИ</h1>

            <div class="sort__variant">
                <a href="#">Новости</a>
                <a href="#" class="active">Статьи</a>
                <a href="#">Заметки</a>
            </div>
        </div>

        <?php $counter = 0; ?>
        <div class="news__items">

            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>

                <div class="news__item <?= $counter < 2 ? 'horizont' : 'vertical'; ?>"
                     id="<?= $this->GetEditAreaId($arItem['ID']); ?>">

                    <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
                        <div class="news__item-img"
                             style="background-image: url(<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>);"></div>
                    <? endif ?>

                    <div class="news__item-cover">
                        <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                            <div class="news__item-title">
                                <?= $arItem["NAME"] ?>
                            </div>
                        <? endif; ?>

                        <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                            <div class="news__item-description">
                                <?= $arItem["PREVIEW_TEXT"]; ?>
                            </div>
                        <? endif; ?>

                        <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                            <div class="news__item-button button">
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">ПОДРОБНЕЕ</a>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>

                <?php
                $counter++;
                if ($counter > 3) {
                    $counter = 0;
                }
                ?>

            <?php endforeach; ?>


        </div>

        <?php if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
           <?=$arResult["NAV_STRING"]?>
        <?php endif;?>

    </div>
</div>
