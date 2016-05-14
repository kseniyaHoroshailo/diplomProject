<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <image style="height: 60px; width: 60px; float:left;" src="<?=base_url()?>img/<?=$user_info['avatar']?>"></image>
                <h1 style="padding: 20px 0 0 80px;"><?=$user;?></h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 blog-sidebar">
                <ul class="recent-posts">
                    <li><a href="<?=base_url();?>index.php/register">Мои данные</a></li>
                    <li><a href="<?=base_url();?>index.php/profile/change_data">Изменить данные</a></li>
                    <li><a href="#">Корзина</a></li>
                    <li><a href="<?=base_url();?>index.php/register/logout">Выйти</a></li>
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="col-md-10">
                <!-- Shopping Cart Items -->
                <?php /*if ($cart = $this->cart->contents()): */?><!--
                <table class="shopping-cart">
                    <?php /*foreach ($cart as $item): */?>
                    <tr>
                        <td class="image"><a href="page-product-details.html"><img src="<?/*= $item['imagePath']; */?>" alt="<?/*= $item['name']; */?>"></a></td>
                        <td>
                            <div class="cart-item-title"><a href="page-product-details.html"><?/*= $item['name']; */?></a></div>
                        </td>
                        <td class="price"><?/*= $item['subtotal'] */?></td>
                        <td class="actions">
                            <a href="#" class="btn btn-xs btn-grey"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="<?/*=base_url();*/?>index.php/profile/remove/"<?/*=$item['rowid']; */?> class="btn btn-xs btn-grey"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                        <td class="actions2">
                            <a href="#" class="btn"><i class="glyphicon glyphicon-shopping-cart icon-white"></i>Купить</a>
                        </td>
                    </tr>

                    <?php /*endforeach; */?>
                </table>
                --><?php /*endif; */?>
                <!-- End Shopping Cart Items -->
            </div>
        </div>
    </div>
</div>