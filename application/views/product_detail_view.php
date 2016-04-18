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
                <li><a href="<?=base_url();?>index.php/catalog/<?=$item['title_en'];?>"><?= $item['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!-- End Sidebar -->
    <div class="container">
        <div class="row">
            <?php /*foreach($product as $item):*/?>
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
                            <a href="#" class="btn btn"><i class="icon-shopping-cart icon-white"></i> Добавить в корзину</a>
                        </td>
                    </tr>
                </table>
            </div>
            <?php /*endforeach;*/?>
            <!-- End Product Summary & Options -->

            <!-- Full Description & Specification -->
            <div class="col-sm-12">
                <div class="tabbable">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs product-details-nav">
                        <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                        <li><a href="#tab2" data-toggle="tab">Specification</a></li>
                    </ul>
                    <!-- Tab Content (Full Description) -->
                    <div class="tab-content product-detail-info">
                        <div class="tab-pane active" id="tab1">
                            <h4>Полное описание</h4>
                            <p>
                                <?=$pages_info['fullDescription'];?>
                            </p>
                        </div>
                        <!-- Tab Content (Specification) -->
                        <div class="tab-pane" id="tab2">
                            <table>
                                <tr>
                                    <td>Total sensor Pixels (megapixels)</td>
                                    <td>Approx. 16.7</td>
                                </tr>
                                <tr>
                                    <td>Effective Pixels (megapixels)</td>
                                    <td>Approx. 16.1</td>
                                </tr>
                                <tr>
                                    <td>Automatic White Balance</td>
                                    <td>YES</td>
                                </tr>
                                <tr>
                                    <td>White balance: preset selection</td>
                                    <td>Daylight, Shade, Cloudy, Incandescent, Fluorescent, Flash</td>
                                </tr>
                                <tr>
                                    <td>White balance: custom setting</td>
                                    <td>YES</td>
                                </tr>
                                <tr>
                                    <td>White balance: types of color temperature</td>
                                    <td>YES (G7 to M7,15-step) (A7 to B7,15-step)</td>
                                </tr>
                                <tr>
                                    <td>White balance bracketing</td>
                                    <td>NO</td>
                                </tr>
                                <tr>
                                    <td>ISO Sensitivity Setting</td>
                                    <td>ISO100 - 25600 equivalent</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Full Description & Specification -->
        </div>
    </div>
</div>