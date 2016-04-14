<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Контакты</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>css/icomoon-social.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?= base_url(); ?>css/leaflet.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?=base_url();?>css/leaflet.ie.css"/>
    <![endif]-->
    <link rel="stylesheet" href="<?= base_url(); ?>css/main-orange.css">

    <script src="<?= base_url(); ?>js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->


<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
    <div class="container">
        <div class="menuextras">
            <div class="extras">
                <ul>
                    <li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a
                            href="page-shopping-cart.html"><b>Корзина</b></a></li>
                    <li><a href="page-login.html">Войти</a></li>
                </ul>
            </div>
        </div>
        <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><a href="<?= base_url(); ?>index.php/welcome"><img src="<?=base_url();?>/img/mPurpose-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
                <li>
                    <a href="<?= base_url(); ?>index.php/welcome">Главная</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>index.php/about_us">О компании</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>index.php/catalog">Каталог продукции</a>
                </li>
                <li class="active">
                    <a href="<?= base_url(); ?>index.php/contacts">Контакты</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Контакты</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <!-- Map -->
                <div id="contact-us-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1216.6783648599169!2d30.974720958330636!3d52.41833373080614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d469c85e26fff7%3A0xcfc3af1b38d2e4e6!2z0YPQuy4g0JHQsNGA0YvQutC40L3QsCA5NCwg0JPQvtC80LXQu9GMLCDQkdC10LvQsNGA0YPRgdGM!5e0!3m2!1sru!2sru!4v1460639334268" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- End Map -->
                <!-- Contact Info -->
                <p class="contact-us-details">
                    <b>Адрес:</b> Беларусь, Гомель ул. Барыкина 94<br/>
                    <b>Телефон:</b> +375 29 2249783<br/>
                    <b>Факс:</b> +375 29 2249783<br/>
                    <b>Email:</b> <a href="mailto:beligrushka@mail.ru">beligrushka@mail.ru</a>
                </p>
                <!-- End Contact Info -->
            </div>
            <div class="col-sm-5">
                <!-- Contact Form -->
                <h3>Отправьте нам сообщение</h3>
                <div class="contact-form-wrapper">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="Name" class="col-sm-3 control-label"><b>Ваше имя</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" id="Name" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="col-sm-3 control-label"><b>Ваш Email</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" id="contact-email" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-message" class="col-sm-3 control-label"><b>Сообщение</b></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" id="contact-message"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn pull-right">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Contact Info -->
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Навигация</h3>
                <ul class="no-list-style footer-navigate-section">
                    <li><a href="<?= base_url(); ?>index.php/welcome">Главная</a></li>
                    <li><a href="<?= base_url(); ?>index.php/about_us">О компании</a></li>
                    <li><a href="<?= base_url(); ?>index.php/catalog">Каталог продукции</a></li>
                    <li><a href="<?= base_url(); ?>index.php/contacts">Контакты</a></li>
                </ul>
            </div>

            <div class="col-footer col-md-4 col-xs-6">
                <h3>Контакты</h3>
                <p class="contact-us-details">
                    <b>Адрес:</b> Беларусь, Гомель<br/>
                    <b>Телефон:</b> +375 29 2249783<br/>
                    <b>Факс:</b> +375 29 2249783<br/>
                    <b>Email:</b> <a href="mailto:beligrushka@mail.ru">beligrushka@mail.ru</a>
                </p>
            </div>
            <div class="col-footer col-md-2 col-xs-6">
                <h3>Оставайтесь на связи</h3>
                <ul class="footer-stay-connected no-list-style">
                    <li><a href="#" class="facebook"></a></li>
                    <li><a href="#" class="twitter"></a></li>
                    <li><a href="#" class="googleplus"></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--				<div class="footer-copyright">&copy; 2013 mPurpose. All rights reserved.</div>-->
            </div>
        </div>
    </div>
</div>

<!-- Javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= base_url(); ?>js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="<?= base_url(); ?>js/jquery.fitvids.js"></script>
<script src="<?= base_url(); ?>js/jquery.sequence-min.js"></script>
<script src="<?= base_url(); ?>js/jquery.bxslider.js"></script>
<script src="<?= base_url(); ?>js/main-menu.js"></script>
<script src="<?= base_url(); ?>js/template.js"></script>

</body>
</html>