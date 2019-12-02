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

<div class="wrapper">
    <div class="main singl-news">

        <?php if($arResult['PROPERTIES']['ATT_H1_TITLE']):?>
            <h1 class="singl-news__title">
                <?=$arResult['PROPERTIES']['ATT_H1_TITLE']['VALUE']['TEXT'];?>
            </h1>
        <?php endif;?>

        <div class="singl-news__img-block">
            <div class="singl-news__img">

                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
                    <div class="singl-news__img-photo" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);"></div>
                <?endif?>

                <?php if($arResult['PROPERTIES']['ATT_IMAGE_TEXT']):?>
                    <div class="singl-news__img-text">
                        <?=$arResult['PROPERTIES']['ATT_IMAGE_TEXT']['VALUE']['TEXT'];?>
                    </div>
                <?php endif;?>
            </div>

<!--            Здесь выводится рандомный товар-->

<!--            <div class="products__item">-->
<!--                <a href="#">-->
<!--                    <div class="products__item-img">-->
<!--                        <img src="img/products/product-3.png" alt="product">-->
<!---->
<!--                        <div class="products__item-mark discount">-10%</div>-->
<!--                    </div>-->
<!--                    <div class="products__item-title">-->
<!--                        Светильник хирургический Armed LED650-->
<!--                    </div>-->
<!--                </a>-->
<!--                <div class="products__item-cover">-->
<!--                    <div class="item-price">-->
<!--                        <span>5.600 Р</span>-->
<!--                        <span class="old-price">6.100 Р</span>-->
<!--                    </div>-->
<!--                    <div class="products__item-buy">-->
<!--                        <a href="#"><i class="flaticon-sell"></i></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

        </div>

        <div class="text__block">
            <?php if(strlen($arResult["DETAIL_TEXT"]) > 0):?>
                <?=$arResult["DETAIL_TEXT"];?>
            <?else:?>
                <?=$arResult["PREVIEW_TEXT"];?>
            <?php endif; ?>
        </div>

    </div>
</div>
