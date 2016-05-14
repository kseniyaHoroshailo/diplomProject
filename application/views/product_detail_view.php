<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$pages_info['naimProduct'];?></h1>
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
                <li><a href="<?=base_url();?>index.php/catalog/cat/<?=$item['title_en'];?>"><?= $item['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- End Sidebar -->
    <div class="container">
        <div class="row">
            <?php echo form_open('profile/buscet_add'); ?>
            <!-- Product Image & Available Colors -->
            <div class="col-sm-6">
                <div class="product-image-large">
                    <img src="<?= $pages_info['imagePath']; ?>" alt="Item Name">
                </div>
            </div>
            <!-- End Product Image & Available Colors -->
            <!-- Product Summary & Options -->
            <div class="col-sm-6 product-details">
                <h4><?=$pages_info['naimProduct'];?></h4>
                <div class="price">
                    <span class="price-was">$959.99</span> <?=$pages_info['price'];?>
                </div>
                <h5>Описание</h5>
                <p>
                    <?=$pages_info['description'];?>
                </p>
                <table class="shop-item-selections">
                    <!-- Quantity -->
                    <tr>
                        <td><b>Количество:</b></td>
                        <td>
                            <input type="text" class="form-control input-sm input-micro" value="1">
                        </td>
                    </tr>
                    <!-- Add to Cart Button -->
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            <?php echo form_hidden('id', $pages_info['id_product']); ?>
                            <?php echo form_submit(array(
                                'action' => 'Добавить в корзину',
                                'class' => 'btn btn',
                                'value' => 'Добавить в корзину'
                            )); ?>
                        </td>
                    </tr>
                </table>
            </div>
            <?php echo form_close(); ?>
            <!-- End Product Summary & Options -->

            <!-- Full Description & Specification -->
            <div class="col-sm-12">
                <div class="tabbable">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs product-details-nav">
                        <li class="active"><a href="#tab1" data-toggle="tab">Подробное описание</a></li>
                    </ul>
                    <!-- Tab Content (Full Description) -->
                    <div class="tab-content product-detail-info">
                        <div class="tab-pane active" id="tab1">
                            <h4><?=$pages_info['naimProduct'];?></h4>
                            <p>
                                <?=$pages_info['fullDescription'];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Full Description & Specification -->
        </div>
    </div>
</div>
<div id="cart">
    <?php if ($cart = $this->cart->contents()): ?>
    <?php print_r($cart);?>
    <?php endif; ?>
</div>