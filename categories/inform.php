<?php get_header(); ?>

<? $cat = get_field("cat",'category_'.$category_id)[0] ?>

<section class="section_first">
    <div class="container">
        <div class="bread">
            <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        </div>
        <h1 class="_title text-left"><? single_cat_title(); ?></h1>
        <div class="row">
            <div class="col-lg-9">
                <div class="row justify-content-center">
                    <div class="col-12">



                    <?
                    $args2 = array(
                        'post_type' => 'post',
                        'cat' => $category_id,
                    );
                    $query2 = new WP_Query($args2); // все посты, кроме категории 1
                    while ($query2->have_posts()) {
                        $query2->the_post();
                        ?>

                        <div class="white_content news-wraper">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="news-image text-center">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) { ?>
                                                <?php the_post_thumbnail('medium'); ?>
                                            <?php } ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-6">
                                    <div class="new-inf">
                                        <span class="_inf-title"><?php
                                            echo get_the_title(); ?></span>
                                        <div class="news-pre-text">
                                                <span><? the_excerpt() ?></span>
                                        </div>
                                    </div>
                                    <div class="news-btn text-right">
                                        <a href="<?php the_permalink(); ?>" class="btn-red">Подробнее</a>
                                    </div>
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
            <div class="col-lg-3 d-none d-lg-block about-left-bar">

                <?
                $args2 = array(
                    'post_type' => 'post',
                    'cat' =>  $cat,
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