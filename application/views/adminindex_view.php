<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="padding: 20px 0 0 80px;"><?=$user;?></h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-sm-3 blog-sidebar">
                <ul class="recent-posts">
                    <li><a href="<?=base_url();?>index.php/admin/">Редактирование каталога товаров</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/">Просмотр списка заказов</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/showmessages">Просмотр сообщений пользователей</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/logout">Выйти</a></li>
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="col-sm-8">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h3 style="text-align: center; padding-bottom: 80px;">Управление сайтом</h3>
                    </div>
                </div>
            </div>
            <!-- End Blog Post -->
        </div>
    </div>
</div>