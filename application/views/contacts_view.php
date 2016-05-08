<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><?=$pages_info['title'];?></h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <!-- Map -->
                <div id="contact-us-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1216.6783648599169!2d30.974720958330636!3d52.41833373080614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d469c85e26fff7%3A0xcfc3af1b38d2e4e6!2z0YPQuy4g0JHQsNGA0YvQutC40L3QsCA5NCwg0JPQvtC80LXQu9GMLCDQkdC10LvQsNGA0YPRgdGM!5e0!3m2!1sru!2sru!4v1460639334268" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- End Map -->
                <!-- Contact Info -->
                <p class="contact-us-details">
                    <b>Адрес:</b> Беларусь, Гомель ул. Барыкина 94<br/>
                    <b>Телефон:</b> +375 29 2249783<br/>
                    <b>Факс:</b> +375 29 2249783<br/>
                    <b>Email:</b> <a href="mailto:beligrushka@mail.ru">beligrushka@mail.ru</a>
                </p>
                <!-- End Contact Info -->
            </div>
            <div class="col-sm-5">
                <!-- Contact Form -->
                <h3>Отправьте нам сообщение</h3>
                <div class="contact-form-wrapper">
                    <form method="post" class="form-horizontal" role="form" action="<?=base_url();?>index.php/contacts/send">
                        <div class="form-group">
                            <label for="Name" class="col-sm-3 control-label"><b>Ваше имя</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" id="Name" type="text"  name="username" placeholder="" value="<?=set_value('username')?>">
                                <span class="show_error"><?=form_error('username')?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-email" class="col-sm-3 control-label"><b>Ваш Email</b></label>
                            <div class="col-sm-9">
                                <input class="form-control" id="contact-email"  name="email" type="text" placeholder="" value="<?=set_value('email')?>">
                                <span class="show_error"><?=form_error('email')?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-message" class="col-sm-3 control-label"><b>Сообщение</b></label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5"  name="message" id="contact-message" value="<?=set_value('message')?>"></textarea>
                                <span class="show_error"><?=form_error('message')?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input name="send" type="submit" class="btn pull-right" value="Отправить"></input>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Contact Info -->
            </div>
        </div>
    </div>
</div>