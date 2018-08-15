<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>


    <section class="section_first">
        <div class="container">
            <div class="bread">

                <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
            </div>

            <div class="row">

                <div class="col-md-5">
                    <div class="white_box">
                        <h3 class="white_box-title">Контакты</h3>
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <a href="tel: +7 (978) 85-85-955">+7 (978) 85-85-955</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <a href="mailto: manager@stonegrad.ru">manager@stonegrad.ru</a>
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>г.Симферополь ул. Пушкина 3</span>
                            </li>
                        </ul>
                    </div>
                    <div class="white_box">
                        <h3 class="white_box-title">Обратная связь</h3>
                        <form action="">
                            <div class="form-control">
                                <input type="text" name="name" placeholder="Введите ваше имя" required>
                            </div>
                            <div class="form-control">
                                <input type="text" name="phone" placeholder="Введите ваш телефон" required>
                            </div>
                            <div class="form-control">
                                <textarea name="message" placeholder="Введите ваше имя" required></textarea>
                            </div>
                            <button type="submit" class="btn-red">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="map_cont">
                        <script type="text/javascript" charset="utf-8" async
                                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5fe935524c83ee95258969d110ec524a0d33b52e84b97d5db1b8bb5451a80e63&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>