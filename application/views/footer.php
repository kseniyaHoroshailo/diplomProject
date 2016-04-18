<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-footer col-md-3 col-xs-6">
                <h3>Навигация</h3>
                <ul class="no-list-style footer-navigate-section">
                    <?php foreach ($pages as $item): ?>
                        <li>
                            <a href="<?=base_url();?>index.php/<?=$item['title_en']?>/index"><?=$item['title']?></a>
                        </li>
                    <?php endforeach; ?>
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