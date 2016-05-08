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
            <div class="col-sm-3 blog-sidebar">
                <ul class="recent-posts">
                    <li><a href="<?=base_url();?>index.php/register">Мои данные</a></li>
                    <li><a href="#">Изменить данные</a></li>
                    <li><a href="<?=base_url();?>index.php/profile/buscet">Корзина</a></li>
                    <li><a href="<?=base_url();?>index.php/register/logout">Выйти</a></li>
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="col-sm-8">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h3>Редактирование данных</h3>
                    </div>
                    <form method="post" role="form" action="<?=base_url();?>index.php/profile/change_data"><div class="single-post-content">
                            <span class="show_error"><?=$error;?></span>
                            <div class="block" style="display: -webkit-box">
                            <label>Имя : <input type="text" name="lastname" value="<?=$user_info['lastname']?>" style="padding-top: 5px; padding-left: 10px"></label>
                        </div>
                        <div class="block" style="display: -webkit-box">
                            <label>Фамилия : <input type="text" name="firstname" value="<?=$user_info['firstname']?>" style="padding-top: 5px; padding-left: 10px"></label>
                        </div>
                        <div class="block" style="display: -webkit-box">
                            <label>E-mail : <input type="text" name="email" value="<?=$user_info['email']?>" style="padding-top: 5px; padding-left: 10px"></label>
                        </div>
                        <div class="form-group" style="display: -webkit-box">
                            <label>Адрес : <input type="text" name="adress" value="<?=$user_info['adress']?>" style="padding-top: 5px; padding-left: 10px"></label>
                        </div>
                            <div class="form-group">
                                <input type="submit" class="btn" name="save" value="Сохранить">
                                <div class="clearfix"></div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            <!-- End Blog Post -->
        </div>
    </div>
</div>