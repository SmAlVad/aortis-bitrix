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

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>

<?php if ($arResult["SECTIONS_COUNT"] > 0): ?>

    <?php if ($arParams['VIEW_MODE'] === 'LINE'): ?>
        <ul class="header__menu-list">
            <?php foreach ($arResult['SECTIONS'] as $key => $section): ?>

                <?php if ($key % 2 === 0): ?>
                    <li class="header__menu-item">
                    <a href="<?=$section['SECTION_PAGE_URL'];?>"><?=$section['NAME'];?></a>
                <?php else: ?>
                    <a href="<?=$section['SECTION_PAGE_URL'];?>"><?=$section['NAME'];?></a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>

    <?=$arResult["SECTIONS_COUNT"] % 2 ? '</li></ul>' : '</ul>';?>

    <?php elseif($arParams['VIEW_MODE'] === 'LIST'):?>

    <?php endif; ?>



<?php endif; ?>
