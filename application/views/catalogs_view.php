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
    <title>Каталог</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/icomoon-social.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?= base_url(); ?>/css/leaflet.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?=base_url();?>/css/leaflet.ie.css"/>
    <![endif]-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/main-orange.css">

    <script src="<?= base_url(); ?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
                <li class="logo-wrapper"><a href="<?= base_url(); ?>index.php/welcome"><img
                            src="<?= base_url(); ?>/img/mPurpose-logo.png"
                            alt="Multipurpose Twitter Bootstrap Template"></a></li>
                <li>
                    <a href="<?= base_url(); ?>index.php/welcome">Главная</a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>index.php/about_us">О компании</a>
                </li>
                <li class="active">
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
                <h1>Каталог продукции</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <!-- Sidebar -->
    <div class="col-sm-2 blog-sidebar">
        <h4>Категории</h4>
        <ul class="blog-categories">
            <?php foreach ($productCategory as $item): ?>
            <li><a href="#"><?= $item['category']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- End Sidebar -->
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <!-- End Sidebar -->
            <?php foreach ($products as $item): ?>
                <div class="col-sm-4">
                    <!-- Product -->
                    <div class="shop-item">
                        <!-- Product Image -->
                        <div class="image">
                            <a href="page-product-details.html"><img src="<?= $item['imagePath']; ?>"
                                                                     alt="Item Name"></a>
                        </div>
                        <!-- Product Title -->
                        <div class="title">
                            <h3><a href="page-product-details.html"><?= $item['naimProduct']; ?></a></h3>
                        </div>
                        <!-- Product Price-->
                        <div class="price">
                            <span class="price-was"></span><?= $item['price']; ?>
                        </div>
                        <!-- Product Description-->
                        <div class="description">
                            <p><?= $item['description']; ?></p>
                        </div>
                        <!-- Add to Cart Button -->
                        <div class="actions">
                            <a href="page-product-details.html" class="btn"><i
                                    class="icon-shopping-cart icon-white"></i> Добавить в корзину</a>
                        </div>
                    </div>
                    <!-- End Product -->
                </div>
            <?php endforeach; ?>
        </div>
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Навигация</h3>
                <ul class="no-list-style footer-navigate-section">
                    <li><a href="<?= base_url(); ?>/index.php/welcome">Главная</a></li>
                    <li><a href="<?= base_url(); ?>/index.php/about_us">О компании</a></li>
                    <li><a href="<?= base_url(); ?>/index.php/catalog">Каталог продукции</a></li>
                    <li><a href="<?= base_url(); ?>/index.php/contacts">Контакты</a></li>
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
<script src="<?= base_url(); ?>/js/bootstrap.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="<?= base_url(); ?>/js/jquery.fitvids.js"></script>
<script src="<?= base_url(); ?>/js/jquery.sequence-min.js"></script>
<script src="<?= base_url(); ?>/js/jquery.bxslider.js"></script>
<script src="<?= base_url(); ?>/js/main-menu.js"></script>
<script src="<?= base_url(); ?>/js/template.js"></script>

</body>
</html>