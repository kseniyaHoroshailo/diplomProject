<!-- Homepage Slider -->
<div class="homepage-slider">
	<div id="sequence">
		<ul class="sequence-canvas">
			<!-- Slide 1 -->
			<li class="bg4">
				<!-- Slide Title -->
				<h2 class="title"></h2>
				<!-- Slide Text -->
				<h3 class="subtitle">У ребёнка должно быть всё, что нужно!</h3>
				<!-- Slide Image -->
				<!--<img class="slide-img" src="<?/*=base_url();*/?>img/homepage-slider/sliderMain1.jpg" alt="Slide 1" />-->
			</li>
			<!-- End Slide 1 -->
			<!-- Slide 2 -->
			<li class="bg3">
				<!-- Slide Title -->
				<h2 class="title"></h2>
				<!-- Slide Text -->
				<h3 class="subtitle">Ваш ребёнок - наш самый большой начальник!</h3>
				<!-- Slide Image -->
				<!--<img class="slide-img" src="<?/*=base_url();*/?>img/homepage-slider/sliderMain2.jpg" alt="Slide 2" />-->
			</li>
			<!-- End Slide 2 -->
			<!-- Slide 3 -->
			<li class="bg1">
				<!-- Slide Title -->
				<h2 class="title"></h2>
				<!-- Slide Text -->
				<h3 class="subtitle"></h3>
				<!-- Slide Image -->
				<!--<img class="slide-img" src="<?/*=base_url();*/?>img/homepage-slider/sliderMain3.jpg" alt="Slide 3" />-->
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

<!-- new toys -->
<div class="section">
	<div class="container">
		<h2>Новинки</h2>
		<div class="row">
			<?php foreach ($latest_products as $item): ?>
			<div class="col-md-4 col-sm-6">
				<div class="service-wrapper">
					<img style="width: 100%; height: 100%" src="<?= $item['imagePath']; ?>" alt="Service 1">
					<h3><?= $item['naimProduct']; ?></h3>
					<p><?= $item['description']; ?></p>
					<a  class="btn" href="<?=base_url();?>index.php/product_detail/<?= $item['id_product']; ?>">Подробнее</a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- End new toys -->

<!-- seil -->
<div class="section">
	<div class="container">
		<h2>Скидки</h2>
		<div class="row">
			<?php foreach ($latest_products as $item): ?>
				<div class="col-md-4 col-sm-6">
					<div class="service-wrapper">
						<img style="width: 100%; height: 100%" src="<?= $item['imagePath']; ?>" alt="Service 1">
						<h3><?= $item['naimProduct']; ?></h3>
						<p><?= $item['description']; ?></p>
						<a  class="btn" href="<?=base_url();?>index.php/product_detail/<?= $item['id_product']; ?>">Подробнее</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!-- End seil -->