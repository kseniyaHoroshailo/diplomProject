<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>О компании</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?=base_url();?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/css/icomoon-social.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?=base_url();?>/css/leaflet.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?=base_url();?>/css/leaflet.ie.css" />
    <![endif]-->
    <link rel="stylesheet" href="<?=base_url();?>/css/main-orange.css">

    <script src="<?=base_url();?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<!-- Navigation & Logo-->
<div class="mainmenu-wrapper">
    <div class="container">
        <div class="menuextras">
            <div class="extras">
                <ul>
                    <li class="shopping-cart-items"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> <a href="page-shopping-cart.html"><b>Корзина</b></a></li>
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
                <li class="active">
                    <a href="<?= base_url(); ?>index.php/about_us">О компании</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>index.php/catalog">Каталог продукции</a>
                </li>
                <li>
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
            <div class="col-md-12">
                <h1>Личный кабинет</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-sm-3 blog-sidebar">
                <ul class="recent-posts">
                    <li><a href="#">Мои настройки</a></li>
                    <li><a href="#">Корзина</a></li>
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="col-sm-8">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h3>Мои настройки</h3>
                    </div>
                    <div class="single-post-image">
                        <img src="img/blog-large.jpg" alt="Post Title">
                    </div>
                    <div class="single-post-content">
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.
                        </p>
                        <p>
                            Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus, a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum quam tortor, sed ultrices orci sagittis nec.
                        </p>
                        <h3>Sed sit amet metus sit</h3>
                        <p>
                            Proin fermentum, purus id eleifend molestie, nisl arcu rutrum tellus, a luctus erat tortor ut augue. Vivamus feugiat nisi sit amet dignissim fermentum. Duis elementum mattis lacinia. Sed sit amet metus sit amet leo semper feugiat. Nulla vel orci nec neque interdum facilisis egestas vitae lorem. Phasellus elit ante, posuere at augue quis, porta vestibulum magna. Nullam non mattis odio. Donec eget velit leo. Nunc et diam volutpat tellus ultrices fringilla eu a neque. Integer lectus nunc, vestibulum a turpis vitae, malesuada lacinia nibh. In sit amet leo ut turpis convallis bibendum. Nullam nec purus sapien. Quisque sollicitudin cursus felis sit amet aliquam.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Blog Post -->
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
<script>window.jQuery || document.write('<script src="<?=base_url();?>/js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="<?=base_url();?>/js/bootstrap.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="<?=base_url();?>/js/jquery.fitvids.js"></script>
<script src="<?=base_url();?>/js/jquery.sequence-min.js"></script>
<script src="<?=base_url();?>/js/jquery.bxslider.js"></script>
<script src="<?=base_url();?>/js/main-menu.js"></script>
<script src="<?=base_url();?>/js/template.js"></script>

</body>
</html>