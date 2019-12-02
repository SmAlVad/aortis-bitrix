<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="contacts">
    <div class="wrapper">
        <div class="contacts__heading heading">
            <h1>КОНТАКТЫ</h1>
        </div>
    </div>

    <div class="contacts__map">
        <div id="map"></div>

        <div class="wrapper">
            <div class="contacts__info">
                <div class="contacts__info-item">
                    <i class="flaticon-address"></i>
                    <div class="info-item__cover">
                        г.Санкт-Петербург, ул. <br>
                        Торжковская д. 5, оф. 428
                    </div>
                </div>
                <div class="contacts__info-item phone">
                    <i class="flaticon-telephone"></i>
                    <div class="info-item__cover">
                        <a href="tel:+78129336274">+7 (812) 933-62-74</a>
                    </div>
                </div>
                <div class="contacts__info-item mail">
                    <i class="flaticon-envelope"></i>
                    <div class="info-item__cover">
                        <a href="mailto:info@cir-spb.ru">info@cir-spb.ru</a>
                    </div>
                </div>
                <div class="contacts__info-button button">
                    <a href="#">НАПИСАТЬ НАМ</a>
                </div>
            </div>
        </div>
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
