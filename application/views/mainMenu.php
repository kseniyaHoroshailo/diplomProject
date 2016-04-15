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
                <?php foreach($pages as $item): ?>
                <li>
                    <a href="#"><?=$item['title']?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</div>