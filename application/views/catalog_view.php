<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Каталог</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <!-- Sidebar -->
    <div class="col-sm-2 blog-sidebar">
        <h4><a href="<?=base_url();?>index.php/catalog">Все категории</a></h4>
        <ul class="blog-categories">
            <?php foreach ($productCategory as $item): ?>
            <li><a href="<?=base_url();?>index.php/catalog/<?=$item['title_en'];?>"><?= $item['title']; ?></a></li>
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
                            <a href="<?=base_url();?>index.php/product_detail/<?= $item['id_product']; ?>"><img src="<?= $item['imagePath']; ?>"
                                                                     alt="Item Name"></a>
                        </div>
                        <!-- Product Title -->
                        <div class="title">
                            <h3><a href="<?=base_url();?>index.php/product_detail/<?= $item['id_product']; ?>"><?= $item['naimProduct']; ?></a></h3>
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