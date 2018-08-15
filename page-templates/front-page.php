<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

    <section class="section_first">
        <div class="container">
            <h1 class="_title">Каталог камня</h1>
            <div class="row justify-content-center">
                <?
                $args = array(
                    'post_type' => 'post',
                    'cat' => '17',
                    'posts_per_page' => '6'
                );
                $query1 = new WP_Query($args); // все посты, кроме категории 1
                while ($query1->have_posts()) {
                    $query1->the_post();
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <a class="production_circl" href="<?php the_permalink(); ?>">
                            <div class="production_circl-img">
                                <?php if (has_post_thumbnail()) { ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php } ?>
                            </div>
                            <div class="production_circl-inf">
                                <span class="_inf-title">
                                    <?php
                                    echo get_the_title(); ?>
                                </span>
                                <span class="_inf-subtitle">
                                    <?php
                                    echo get_the_excerpt(); ?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <?
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="another_but">
                <a href="/category/katalog-kamnja/" class="btn-red">Подробнее</a>
            </div>
        </div>
    </section>

    <section class="section_first __sec">
        <div class="container">
            <h2 class="_title">Продукция</h2>
            <div class="row justify-content-center">
                <?
                $args2 = array(
                    'post_type' => 'post',
                    'cat' => '2',
                    'posts_per_page' => '6'
                );
                $query2 = new WP_Query($args2); // все посты, кроме категории 1
                while ($query2->have_posts()) {
                    $query2->the_post();
                    ?>
                    <div class="col-lg-4 col-md-6">
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
                    </div>
                    <?
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="another_but">
                <a href="/category/produkcija/" class="btn-white"><i class="fa fa-book"></i> Вся продукция</a>
            </div>
        </div>
    </section>

    <section class="section_first __sec">
        <div class="container">
            <h2 class="_title">Услуги</h2>
            <div class="row justify-content-center">
                <?
                $args3 = array(
                    'post_type' => 'post',
                    'cat' => '8',
                    'posts_per_page' => '4'
                );
                $query3 = new WP_Query($args3);
                while ($query3->have_posts()) {
                    $query3->the_post();
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <a class="production __usl" href="<?php the_permalink(); ?>">
                            <div class="production-img">
                                <?php if (has_post_thumbnail()) { ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php } ?>
                            </div>
                            <div class="production-inf">
                                <span class="_inf-title">
                                    <?php
                                    echo get_the_title(); ?>
                                </span>
                                <span class="_inf-subtitle">
                                    <?php
                                    echo get_the_excerpt(); ?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <?
                }
                wp_reset_postdata();
                ?>
            </div>
            <div class="another_but">
                <a href="/category/uslugi/" class="btn-red">Все услуги</a>
            </div>
        </div>
    </section>

    <section class="section_soc">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <h3 class="_title text-left">Присоединяйтесь к нам в соцсетях</h3>
                </div>
                <div class="col-md-8">
                    <div class="soc-btn-block">
                        <a href="#" class="btn-soc __vk">
                            <i class="fa fa-vk"></i>
                            <span>10 000</span>
                        </a>
                        <a href="#" class="btn-soc __inst">
                            <i class="fa fa-instagram"></i>
                            <span>11 321</span>
                        </a>
                        <a href="#" class="btn-soc __fa">
                            <i class="fa fa-facebook"></i>
                            <span>11 223</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h3 class="_title">Наши работы</h3>
    <section class="pm_land_section">
        <div class="pm_land-slider">


            <div class="pm_land-slide_c">
                <div class="pm_land-slide"
                     style="background-image: url('https://images2.popmeh.ru/upload/img_cache/3a1/3a1076055c7eebc0d78644b98da4b7e8_ce_1920x1200x0x0.jpg');"></div>
                <div class="container">
                    <div class="pm_land-slide-box">
                        <p class="pm_land-slider__title pm-why__caption">Фонтан в городе ялте</p>
                    </div>
                </div>
            </div>
            <div class="pm_land-slide_c">
                <div class="pm_land-slide"
                     style="background-image: url('https://cdn1.fullpicture.ru/wp-content/uploads/2015/03/Samye-krasivye-fontany-mira-21.jpg');"></div>
                <div class="container">
                    <div class="pm_land-slide-box">
                        <p class="pm_land-slider__title pm-why__caption">Фонтан в городе симферополе</p>
                    </div>
                </div>
            </div>
            <div class="pm_land-slide_c">
                <div class="pm_land-slide"
                     style="background-image: url('https://images2.popmeh.ru/upload/img_cache/3a1/3a1076055c7eebc0d78644b98da4b7e8_ce_1920x1200x0x0.jpg');"></div>
                <div class="container">
                    <div class="pm_land-slide-box">
                        <p class="pm_land-slider__title pm-why__caption">Фонтан в городе Севастополь</p>
                    </div>
                </div>
            </div>
            <div class="pm_land-slide_c">
                <div class="pm_land-slide"
                     style="background-image: url('https://img.tourister.ru/files/3/7/6/6/4/6/5/original.jpg');"></div>
                <div class="container">
                    <div class="pm_land-slide-box">
                        <p class="pm_land-slider__title pm-why__caption">Фонтан в Керчи</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="pm_land-slider_btn">
            <div class="container">
                <div class="pm-slider-btns__btn pm-slider-btns__btn--prev pm-land-slider__prev"></div>
                <div class="pm-slider-btns__btn pm-slider-btns__btn--next pm-land-slider__next"></div>
            </div>
        </div>
    </section>

    <section class="section_prefooter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="<?= get_template_directory_uri() ?>/public/images/logocopy.png" alt="logo">
                </div>
                <div class="col-md-8">
                    <span class="section_prefooter-text">
                        Компания Stone Grad - выполняем большое множество работ связанных с природными
                        камнямии многим другим. Являемся поставщиком в 34государственных контрактах
                        исспользуем новые технологии производства кульптур, которые позволяют нам добиваться
                        новых высот в своей сфере бизнеса.
                    </span>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>