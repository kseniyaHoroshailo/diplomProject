<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Авторизация</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="basic-login">
                    <form method="post" action="<?=base_url();?>index.php/admin" role="form">
                        <span class="show_error"><?=$error;?></span>
                        <div class="form-group">
                            <label for="login-username"><i class="icon-user"></i> <b>Имя пользователя</b></label>
                            <input class="form-control" name="username" id="login-username" type="text" placeholder="" value="<?=set_value('username')?>">
                            <span class="show_error"><?=form_error('username');?></span>
                        </div>
                        <div class="form-group">
                            <label for="login-password"><i class="icon-lock"></i> <b>Пароль</b></label>
                            <input class="form-control" name="password" id="login-password" type="password" placeholder="">
                            <span class="show_error"><?=form_error('password');?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="enter" class="btn pull-right">Войти</input>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>