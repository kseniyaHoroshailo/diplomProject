 <nav id="mainmenu" class="mainmenu">
            <ul>
                <li class="logo-wrapper"><a href="<?= base_url(); ?>index.php/pages/main"><img
                            src="<?= base_url(); ?>/img/mPurpose-logo.png"
                            alt="Multipurpose Twitter Bootstrap Template"></a></li>
                <?php foreach ($pages as $item): ?>
                <li>
                    <a href="<?=base_url();?>index.php/<?=$item['title_en']?>/index"><?=$item['title']?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</div>