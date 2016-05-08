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
                    <li><a href="<?=base_url();?>index.php/profile/change_data">Редактирование каталога товаров</a></li>
                    <li><a href="<?=base_url();?>index.php/profile/change_data">Просмотр списка заказов</a></li>
                    <li><a href="<?=base_url();?>index.php/profile/buscet">Просмотр сообщений пользователей</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/logout">Выйти</a></li>
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="col-sm-8">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h3>Управление каталогом</h3>
                    </div>
                    <div class="single-post-content">
                        <!--<div class="block" style="display: -webkit-box">
                            <h4>Имя :</h4> <h5 style="padding-top: 5px; padding-left: 10px"><?/*=$user_info['lastname']*/?></h5>
                        </div>
                        <div class="block" style="display: -webkit-box">
                            <h4>Фамилия :</h4> <h5 style="padding-top: 5px; padding-left: 10px"><?/*=$user_info['firstname']*/?></h5>
                        </div>
                        <div class="block" style="display: -webkit-box">
                            <h4>E-mail :</h4> <h5 style="padding-top: 5px; padding-left: 10px"><?/*=$user_info['email']*/?></h5>
                        </div>
                        <div class="block" style="display: -webkit-box">
                            <h4>Адрес :</h4> <h5 style="padding-top: 5px; padding-left: 10px"><?/*=$user_info['adress']*/?></h5>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- End Blog Post -->
        </div>
    </div>
</div>