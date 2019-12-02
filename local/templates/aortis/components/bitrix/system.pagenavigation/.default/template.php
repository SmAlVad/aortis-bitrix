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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<div class="catalog__pagination">
    <div class="catalog__pagination-list">


<?if($arResult["bDescPageNumbering"] !== true):?>

	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>
            <div class="catalog__pagination-item">
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
                    <i class="flaticon-back"></i>
                </a>
            </div>
		<?else:?>

			<?if ($arResult["NavPageNomer"] > 2):?>
                <div class="catalog__pagination-item">
                    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
                        <i class="flaticon-back"></i>
                    </a>
                </div>
			<?else:?>
                <div class="catalog__pagination-item">
                    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
                        <i class="flaticon-back"></i>
                    </a>
                </div>
			<?endif?>

		<?endif?>

	<?else:?>
        <div class="catalog__pagination-item--inactive">
            <i class="flaticon-back"></i>
        </div>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <div class="catalog__pagination-item--active">
                <?=$arResult["nStartPage"]?>
            </div>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
            <div class="catalog__pagination-item">
			    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a>
            </div>
		<?else:?>
            <div class="catalog__pagination-item">
			    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>
            </div>
		<?endif?>

		<?$arResult["nStartPage"]++?>
	<?endwhile?>


	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
        <div class="catalog__pagination-item">
            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
                <i class="flaticon-next"></i>
            </a>
        </div>
	<?else:?>
        <div class="catalog__pagination-item--inactive">
            <i class="flaticon-next"></i>
        </div>
	<?endif?>

<?endif?>


</div>

</div>
