<?php
/*
Template Name: О компании
*/
?>
<?php get_header(); ?>

<section class="section_first">

    <div class="container">
        <div class="bread">

            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div>

        <div class="row">
            <div class="col-12">
                <h1 class="_title text-left"><? the_title() ?></h1>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="white_content">
                    <div class="content-text">
                        <p>Наша компания занимает лидирующие позиции на отечественном рынке предоставления товаров и услуг связанных с камнем.
                            Мы очень дорожим нашей репутацией и ценим каждого клиента. Мы считаем, что чувство удовлетворённости каждого клиента после
                            работы с нами - одна из нашех основных целей.</p>
                        <p>Об этом свидетельствую цифры:</p>
                        <div class="row">
                            <div class="col-lg-6 col-xl-4 margin-auto">
                                <div class="numerick">
                                    <p>39</p>
                                    <span>
                                            Госсударственный
                                            <br>
                                            контрактов
                                        </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 margin-auto">
                                <div class="numerick">
                                    <p>7</p>
                                    <span>
                                            Установлено фонтанов
                                            <br>
                                            В Крыму</span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 margin-auto">
                                <div class="numerick">
                                    <p>10 000</p>
                                    <span>
                                            Более 10 000
                                            <br>
                                            довольных клиентов
                                        </span>
                                </div>
                            </div>
                            <p>Компания Stone Grad успешно сотрудничает с:</p>
                            <div class="full-width">
                                <ul>
                                    <li>Госсударственные тендеры</li>
                                    <li>Крупные строительные компании</li>
                                    <li>Частные строительные компании</li>
                                    <li>Частные заказчики</li>
                                </ul>
                            </div>
                            <p>Наша компания - не однократно номинировалась на различные премии в сфере товаров и услуг.
                                В нашей работе мы используем новейшие разработки в этой отрасли.</p>
                            <p>Обратившись к нам единожды, Вы останитесь нашим клиентом на долго!</p>
                        </div>
                    </div>
                </div>
                <div class="after_form">
                    <h3 class="_title text-left">Заполните форму, для получения скидки</h3>
                    <form action="">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="name" required="" placeholder="Введите Ваше имя">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="phone" required="" placeholder="Введите Ваш телефон">
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn-red">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block about-left-bar">
                <?
                $args2 = array(
                    'post_type' => 'post',
                    'cat' =>  get_field("cat")[0],
                    'posts_per_page' =>  3,
                );
                $query2 = new WP_Query($args2); // все посты, кроме категории 1
                while ($query2->have_posts()) {
                    $query2->the_post();
                    ?>
                        <div class="production">
                            <a class="production-img" href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) { ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php } ?>
                            </a>
                            <div class="production-inf">
                                <span class="_inf-title">
                                    <?php
                                    echo get_the_title(); ?>
                                </span>
                                <span class="_inf-price">
                                   <i class="fa fa-rub"></i> <?= get_field("price") ?>
                                </span>
                                <a href="<?php the_permalink(); ?>" class="btn-red">Подробнее</a>
                            </div>
                        </div>
                    <?
                }
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>