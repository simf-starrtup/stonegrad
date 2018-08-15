<?php get_header(); ?>

    <section class="section_first __single">
        <div class="container">
            <div class="bread">

                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>
            <h1 class="_title text-left"><? the_title(); ?></h1>
            <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="//yastatic.net/share2/share.js"></script>
            <div class="ya-share2"
                 data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,viber,whatsapp,skype,telegram"></div>

            <div class="row">
                <div class="col-md-8">
                    <div class="white_content">
                        <div class="content-img">
                            <?php if (has_post_thumbnail()) { ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php } ?>
                        </div>
                        <?if(get_field("price")){?>
                        <div class="content-price">
                            <span class="_inf-price">
                               <i class="fa fa-rub"></i> <?= get_field("price") ?>
                            </span>
                        </div>
                        <? } ?>
                        <div class="content-text">
                            <? the_content(); ?>
                        </div>
                        <?if(get_field("slider")){?>
                            <div class="content-slider">
                                <?foreach (get_field("slider") as $slide){?>
                                    <a class="slide_cont" href="<?=$slide['slider_photo']?>" style="background-image: url(<?=$slide['slider_photo']?>)">

                                    </a>
                                <?}?>
                            </div>
                        <?}?>
                    </div>
                    <div class="after_form">
                        <h3 class="_title text-left">Заполните форму, для получения скидки</h3>
                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="name" required placeholder="Введите Ваше имя">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="phone" required placeholder="Введите Ваш телефон">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn-red">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 another_block">
                    <?
                    $category = get_the_category();
                    $idcat = $category[0]->cat_ID;
                    $postid = get_the_ID();
                    ?>

                    <?
                    $args2 = array(
                        'post_type' => 'post',
                        'cat' => $idcat,
                        'post__not_in' => [$postid],
                        'posts_per_page' => '3'
                    );
                    $query2 = new WP_Query($args2); // все посты, кроме категории 1
                    while ($query2->have_posts()) {
                        $query2->the_post();
                        ?>
                        <div class="production_abbody">
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
            </div>
        </div>
    </section>


<?php get_footer(); ?>