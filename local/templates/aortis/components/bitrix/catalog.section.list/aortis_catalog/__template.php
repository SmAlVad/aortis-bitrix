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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
    'LIST' => array(
        'LI_LASS' => '',
        'UL_CLASS' => '',
    ),
    'LINE' => array(
        'LI_LASS' => '',
        'UL_CLASS' => 'header__menu-list',
    )
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>

<?php if (0 < $arResult["SECTIONS_COUNT"])
{
?>

<ul class="<?= $arCurView['UL_CLASS']; ?>">
    <?
    switch ($arParams['VIEW_MODE'])
    {
    case 'LINE':
        foreach ($arResult['SECTIONS'] as &$arSection)
        {
            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

            if (false === $arSection['PICTURE'])
                $arSection['PICTURE'] = array(
                    'SRC' => $arCurView['EMPTY_IMG'],
                    'ALT' => (
                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
                        : $arSection["NAME"]
                    ),
                    'TITLE' => (
                    '' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                        ? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
                        : $arSection["NAME"]
                    )
                );
            ?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
            <a
                href="<? echo $arSection['SECTION_PAGE_URL']; ?>"
                class="bx_catalog_line_img"
                style="background-image: url('<? echo $arSection['PICTURE']['SRC']; ?>');"
                title="<? echo $arSection['PICTURE']['TITLE']; ?>"
            ></a>
            <h2 class="bx_catalog_line_title"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
                if ($arParams["COUNT_ELEMENTS"])
                {
                    ?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
                }
                ?></h2><?
            if ('' != $arSection['DESCRIPTION'])
            {
                ?><p class="bx_catalog_line_description"><? echo $arSection['DESCRIPTION']; ?></p><?
            }
            ?><div style="clear: both;"></div>
            </li><?
        }
        unset($arSection);
        break;
    case 'LIST':
    $intCurrentDepth = 1;
    $boolFirst = true;
    foreach ($arResult['SECTIONS'] as &$arSection)
    {
    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

    if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL'])
    {
        if (0 < $intCurrentDepth)
            echo "\n",str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']),'<ul>';
    }
    elseif ($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL'])
    {
        if (!$boolFirst)
            echo '</li>';
    }
    else
    {
        while ($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL'])
        {
            echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
            $intCurrentDepth--;
        }
        echo str_repeat("\t", $intCurrentDepth-1),'</li>';
    }

    echo (!$boolFirst ? "\n" : ''),str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']);
    ?><li id="<?=$this->GetEditAreaId($arSection['ID']);?>"><h2 class="bx_sitemap_li_title"><a href="<? echo $arSection["SECTION_PAGE_URL"]; ?>"><? echo $arSection["NAME"];?><?
                if ($arParams["COUNT_ELEMENTS"])
                {
                    ?> <span>(<? echo $arSection["ELEMENT_CNT"]; ?>)</span><?
                }
                ?></a></h2><?

        $intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
        $boolFirst = false;
        }
        unset($arSection);
        while ($intCurrentDepth > 1)
        {
            echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
            $intCurrentDepth--;
        }
        if ($intCurrentDepth > 0)
        {
            echo '</li>',"\n";
        }
        break;
        }
        ?>
</ul>
<?
echo ('LINE' != $arParams['VIEW_MODE'] ? '<div style="clear: both;"></div>' : '');
}
?></div>
