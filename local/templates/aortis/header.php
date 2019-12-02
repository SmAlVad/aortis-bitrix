<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$bIsMainPage = $APPLICATION->GetCurPage() === SITE_DIR;
?>
<!DOCTYPE html>
<html>
<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>

    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/css/main.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/plugins/slick/slick.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH; ?>/plugins/magnific-popup/css/magnific-popup.min.css">
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

<header class="header">
    <div class="header__block">
        <div class="wrapper">
            <div class="header__menu-icon">
                <span></span>
            </div>
            <div class="header__logo">
                <?php if($bIsMainPage):?>
                    <span><img src="<?= SITE_TEMPLATE_PATH; ?>/img/logo.png" alt="logo"></span>
                <?php else:?>
                    <a href="/"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/logo.png" alt="logo"></a>
                <?php endif;?>
            </div>

            <div class="header__catalog">
                <span></span>
                КАТАЛОГ
                <i class="flaticon-next"></i>
            </div>

            <div class="header__phone">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/inc/phone.php"
                    )
                ); ?>
            </div>

            <div class="header__button button">
                <a href="#" class="call"><i class="flaticon-call"></i><span>ПЕРЕЗВОНИТЬ МНЕ</span></a>
            </div>

            <!-- Top menu -->
            <nav class="header__nav">
                <? $APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"aortis-menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "aortis-menu"
	),
	false
); ?>
            </nav>
            <!-- /Top menu -->

            <a href="#" class="header__search"><i class="flaticon-search"></i></a>
            <a href="basket.html" class="header__basket">
                <i class="flaticon-sell"></i>
                <span class="header__basket-title">Корзина:</span>
                <span class="header__basket-quantity">12 товара</span>
            </a>
        </div>
    </div>

    <div class="header__menu">
        <div class="wrapper">
            <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"catalog", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "catalog",
		"COUNT_ELEMENTS" => "N",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalogs",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "/katalog/#SECTION_CODE_PATH#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE"
	),
	false
);?>

            <div class="header__phone">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/inc/phone.php"
                    )
                ); ?>
            </div>

            <div class="header__button button">
                <a href="#" class="call"><i class="flaticon-call"></i><span>ПЕРЕЗВОНИТЬ МНЕ</span></a>
            </div>
        </div>
    </div>
</header>

