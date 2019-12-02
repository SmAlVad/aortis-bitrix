<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<footer class="footer">
    <div class="wrapper">
        <div class="footer__items">
            <div class="footer__item">
                <div class="footer__item-heading">СКУТЕРА</div>
                <ul class="footer__item-list">
                    <li>
                        <a href="#">Где купить</a>
                    </li>
                    <li>
                        <a href="#">Сервисные центры</a>
                    </li>
                    <li>
                        <a href="#">Информация о доставке​</a>
                    </li>
                    <li>
                        <a href="#">Инструкция по применению</a>
                    </li>
                    <li>
                        <a href="#">Гарантия</a>
                    </li>
                </ul>
            </div>

            <div class="footer__item">
                <div class="footer__item-heading">О НАС</div>
                <ul class="footer__item-list">
                    <li>
                        <a href="#">Cоблюдение требований</a>
                    </li>
                    <li>
                        <a href="#">Политика Конфиденциальности</a>
                    </li>
                    <li>
                        <a href="#">Условия продажи</a>
                    </li>
                    <li>
                        <a href="#">Конакты</a>
                    </li>
                    <li>
                        <a href="#">Показать на карте</a>
                    </li>
                </ul>
            </div>

            <div class="footer__item">
                <div class="footer__item-heading">НАШ АДРЕС</div>
                <ul class="footer__item-list">
                    <li class="address">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/inc/footer_address.php"
                            )
                        );?>
                    </li>
                </ul>

                <div class="footer__item-heading">НАПИСАТЬ НАМ</div>
                <ul class="footer__item-list">
                    <li>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/inc/footer_email.php"
                            )
                        );?>
                    </li>
                </ul>
            </div>

            <div class="footer__item footer__info">
                <div class="footer__info-phone">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/inc/phone.php"
                        )
                    );?>
                </div>
                <div class="footer__info-button button callme">
                    <a href="#" class="call">ПЕРЕЗВОНИТЬ МНЕ</a>
                </div>
                <div class="footer__info-button button youtube">
                    <a href="#">НАШ YOUTUBE КАНАЛ</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__copy">
        &copy; 2019 Драйв Медика. Все права защищены
    </div>
</footer>

<div class="popup__call popup mfp-hide">
    <div class="mfp-close">
        <span></span>
    </div>
    <div class="popup__heading">
        ПЕРЕЗВОНИТЬ МНЕ
    </div>
    <form class="popup__form">
        <div class="popup__form-item">
            <input type="text" name="name" placeholder="Ваше имя">
        </div>
        <div class="popup__form-item">
            <input type="text" name="phone" placeholder="Ваш телефон">
        </div>
        <div class="popup__form-item button">
            <button type="submit">ПРОДОЛЖИТЬ ПОКУПКИ</button>
        </div>
    </form>
</div>

<div class="popup__thank thank popup mfp-hide">
    <div class="mfp-close">
        <span></span>
    </div>
    <div class="thank__text">
        Спасибо что вы выбрали нас! <br>
        Наши операторы свяжутся с вами
        в течении <span>15 минут.</span>

        <div class="thank__text-sub">
            Удачного дня!
        </div>
    </div>
    <div class="thank__button button">
        <a href="#">ПРОДОЛЖИТЬ ПОКУПКИ</a>
    </div>
</div>

<!-- lib -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-3.2.1.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/plugins/slick/slick.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/plugins/masked-input/jquery.maskedinput.min.js"></script>

<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</body>
</html>
