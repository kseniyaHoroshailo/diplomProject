<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>БелИгрушка</title>
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
				<li class="active">
					<a href="<?= base_url(); ?>index.php/welcome">Главная</a>
				</li>
				<li>
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

<!-- Homepage Slider -->
<div class="homepage-slider">
	<div id="sequence">
		<ul class="sequence-canvas">
			<!-- Slide 1 -->
			<li class="bg4">
				<!-- Slide Title -->
				<h2 class="title">Responsive</h2>
				<!-- Slide Text -->
				<h3 class="subtitle">It looks great on desktops, laptops, tablets and smartphones</h3>
				<!-- Slide Image -->
				<img class="slide-img" src="img/homepage-slider/sloderMain1.jpg" alt="Slide 1" />
			</li>
			<!-- End Slide 1 -->
			<!-- Slide 2 -->
			<li class="bg3">
				<!-- Slide Title -->
				<h2 class="title">Color Schemes</h2>
				<!-- Slide Text -->
				<h3 class="subtitle">Comes with 5 color schemes and it's easy to make your own!</h3>
				<!-- Slide Image -->
				<img class="slide-img" src="img/homepage-slider/sliderMain2.jpg" alt="Slide 2" />
			</li>
			<!-- End Slide 2 -->
			<!-- Slide 3 -->
			<li class="bg1">
				<!-- Slide Title -->
				<h2 class="title">Feature Rich</h2>
				<!-- Slide Text -->
				<h3 class="subtitle">Huge amount of components and over 30 sample pages!</h3>
				<!-- Slide Image -->
				<img class="slide-img" src="img/homepage-slider/sliderMain3.jpg" alt="Slide 3" />
			</li>
			<!-- End Slide 3 -->
		</ul>
		<div class="sequence-pagination-wrapper">
			<ul class="sequence-pagination">
				<li>1</li>
				<li>2</li>
				<li>3</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Homepage Slider -->

<!-- Press Coverage -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="in-press press-wired">
					<a href="#">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="in-press press-mashable">
					<a href="#">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="in-press press-techcrunch">
					<a href="#">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Press Coverage -->

<!-- Services -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="service-wrapper">
					<img src="img/service-icon/diamond.png" alt="Service 1">
					<h3>Aliquam in adipiscing</h3>
					<p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
					<a href="#" class="btn">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="service-wrapper">
					<img src="img/service-icon/ruler.png" alt="Service 2">
					<h3>Curabitur mollis</h3>
					<p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
					<a href="#" class="btn">Read more</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="service-wrapper">
					<img src="img/service-icon/box.png" alt="Service 3">
					<h3>Vivamus mattis</h3>
					<p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
					<a href="#" class="btn">Read more</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Services -->

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
<script src="/js/bootstrap.min.js"></script>
<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<script src="<?=base_url();?>/js/jquery.fitvids.js"></script>
<script src="<?=base_url();?>/js/jquery.sequence-min.js"></script>
<script src="<?=base_url();?>/js/jquery.bxslider.js"></script>
<script src="<?=base_url();?>/js/main-menu.js"></script>
<script src="<?=base_url();?>/js/template.js"></script>

</body>
</html>