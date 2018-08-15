<?php get_header(); ?>

    <section class="section_first __cat">
        <div class="container">
            <div class="bread">
                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>
            <h1 class="_title text-left"><? single_cat_title(); ?></h1>
            <div class="row">
                <div class="col-md-9">
                    <div class="row justify-content-start">
                        <?php
                        $categories=  get_categories('child_of='.$category_id);
                        if(count($categories) && count($_GET) == 0){
                            foreach ($categories as $category) {
                            ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="production">
                                        <a class="production-img" href="<?=get_category_link( $category->term_id ) ?>">
                                            <img src="<?= get_field("photo",'category_'.$category->term_id) ?>" alt="photo">
                                        </a>
                                        <div class="production-inf">
                                            <span class="_inf-title">
                                                <?= $category->cat_name ?>
                                            </span>
                                            <span class="_inf-price">
                                               <i class="fa fa-rub"></i> <?= get_field("price",'category_'.$category->term_id) ?>
                                            </span>
                                            <a href="<?=get_category_link( $category->term_id ) ?>" class="btn-red">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            <?
                            }
                        }else{
                        ?>

                            <?
                            $cat_pulse = [];
                            $cat_pulse[] = $category_id;
                            if(count($_GET)){
                                foreach ($_GET as $key=>$value){
                                    $cat_pulse[]= $value;
                                }
                            }
                            $args2 = array(
                                'post_type' => 'post',
                                'posts_per_page' =>  -1,
                                'category__and' => $cat_pulse,
                            );
                            $query2 = new WP_Query($args2); // все посты, кроме категории 1
                            if($query2->have_posts()){
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
                            <?}else{?>
                                <div class="col-12">
                                    <h3>По вашему запросу ничего не найдено!</h3>
                                    <a href="<?=get_category_link( $category_id ) ?>" class="btn-red">Сбросить поиск</a>
                                </div>
                            <?}?>
                        <?}?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="search_box">
                        <div class="search_box-body">
                            <h3>Поиск:</h3>
                            <form action="<?=get_category_link( 17 ) ?>" method="get">
                                <? $cp = 56; $filters =  get_categories([
                                    'hide_empty' => '0',
                                    'child_of' => $cp,
                                ]); ?>
                                <?foreach ($filters as $filter) {?>
                                    <?if($filter->category_parent == $cp){?>
                                        <p class="form-label"><?=$filter->name?></p>
                                        <? $cp2 = $filter->term_id; $filters_op =  get_categories([
                                            'hide_empty' => '0',
                                            'child_of' => $cp2,
                                        ]); ?>
                                        <?foreach ($filters_op as $filter_op) {?>
                                            <label>
                                                <input type="radio" name="<?=$cp2?>" value="<?=$filter_op->term_id?>" <?if($_GET[$cp2] == $filter_op->term_id){?>checked<?}?>>
                                                <span><?=$filter_op->name?></span>
                                            </label>
                                        <?}?>

                                    <?}?>
                                <?}?>
                                <button type="submit" class="btn-white btn-search">
                                    Найти <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php get_footer(); ?>