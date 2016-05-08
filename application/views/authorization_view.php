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
            <div class="col-sm-5">
                <div class="basic-login">
                    <form method="post" action="<?=base_url();?>index.php/register" role="form">
                        <span class="show_error"><?=$error;?></span>
                        <div class="form-group">
                            <label for="login-username"><i class="icon-user"></i> <b>Имя пользователя</b></label>
                            <input class="form-control" name="username" id="login-username" type="text" placeholder="" value="<?=set_value('username')?>">
                            <span class="show_error"><?=form_error('username')?></span>
                        </div>
                        <div class="form-group">
                            <label for="login-password"><i class="icon-lock"></i> <b>Пароль</b></label>
                            <input class="form-control" name="password" id="login-password" type="password" placeholder="">
                            <span class="show_error"><?=form_error('password');?></span>
                        </div>
                        <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox"> Запомнить пароль</input>
                            </label>
                            <a href="<?=base_url();?>index.php/profile/password" class="forgot-password">Забыли пароль?</a>
                            <input type="submit" name="log" class="btn pull-right" value="Войти"></input>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-7 social-login">
                <p>Авторизация через Facebook или Twitter</p>
                <div class="social-login-buttons">
                    <a href="#" class="btn-facebook-login">Войти через Facebook</a>
                    <a href="#" class="btn-twitter-login">Войти через witter</a>
                </div>
                <div class="clearfix"></div>
                <div class="not-member">
                    <p>Ещё не зарегистрированы? <a href="<?=base_url();?>index.php/register/reg">Регистрация</a></p>
                </div>
            </div>
        </div>
    </div>
</div>