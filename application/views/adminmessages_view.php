<!-- Page Title -->
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="padding: 20px 0 0 80px;"><?=$user; ?></h1>
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
                    <li><a href="<?= base_url(); ?>index.php/admin">Редактирование каталога товаров</a>
                    </li>
                    <li><a href="<?= base_url(); ?>index.php/admin">Просмотр списка заказов</a></li>
                    <li><a href="#">Просмотр сообщений пользователей</a>
                    </li>
                    <li><a href="<?= base_url(); ?>index.php/admin/logout">Выйти</a></li>
                </ul>
            </div>
            <!-- End Sidebar -->
            <div class="col-sm-8">
                <div class="blog-post blog-single-post">
                    <div class="single-post-title">
                        <h3 style="text-align: center;">Сообщения пользователей</h3>
                    </div>
                    <div class="single-post-content">
                        <table style="border: 1px solid grey; width: 100%;">
                            <thead>
                            <tr>
                                <td style="text-align: center;border: 1px solid grey; padding: 5px">Имя пользователя</td>
                                <td style="text-align: center;border: 1px solid grey;">E-mail</td>
                                <td style="text-align: center;border: 1px solid grey;">Сообщение</td>
                                <td style="text-align: center;border: 1px solid grey;">Дата</td>
                            </tr>
                            </thead>
                            <?php foreach ($messages as $item): ?>
                            <tr>
                                <td style="text-align: center;border: 1px solid grey;">
                                <?= $item['username']; ?>
                                </td>
                                <td style="text-align: center;border: 1px solid grey;">
                                    <?= $item['email']; ?>
                                </td>
                                <td style="text-align: justify;border: 1px solid grey;">
                                    <?= $item['message']; ?>
                                </td>
                                <td style="text-align: center;border: 1px solid grey;">
                                    <?= $item['date']; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Blog Post -->
        </div>
    </div>
</div>