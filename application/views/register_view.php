<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Регистрация</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="basic-login">
                    <form method="post" role="form" action="<?=base_url();?>index.php/register/reg">
                        <span class="show_error"><?=$error;?></span>
                        <div class="form-group">
                            <label for="register-username"><i class="icon-user"></i> <b>Логин</b></label>
                            <input class="form-control" id="register-username" type="text" name="username" placeholder="" value="<?=set_value('username')?>">
                            <span class="show_error"><?=form_error('username');?></span>
                        </div>
                        <div class="form-group">
                            <label for="register-email"><i class="icon-user"></i> <b>Email</b></label>
                            <input class="form-control" id="register-email" type="text" name="email"placeholder="" value="<?=set_value('email')?>">
                            <span class="show_error"><?=form_error('email');?></span>
                        </div>
                        <div class="form-group">
                            <label for="register-password"><i class="icon-lock"></i> <b>Пароль</b></label>
                            <input class="form-control" id="register-password" type="password" name="password" placeholder="">
                            <span class="show_error"><?=form_error('password');?></span>
                        </div>
                        <div class="form-group">
                            <label for="register-password2"><i class="icon-lock"></i> <b>Повторите пароль</b></label>
                            <input class="form-control" id="register-password2" type="password" name="password2" placeholder="">
                            <span class="show_error"><?=form_error('password2');?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn pull-right" name="register" value="Регистрация"></input>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-1 social-login">
                <p>Вы можете использовать Facebook или Twitter для регистрации</p>
                <div class="social-login-buttons">
                    <a href="#" class="btn-facebook-login">Использовать Facebook</a>
                    <a href="#" class="btn-twitter-login">Использовать Twitter</a>
                </div>
            </div>
        </div>
    </div>
</div>