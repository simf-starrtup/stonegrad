
<footer class="footer">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-4">
                <div class="footer-soc">
                    <a href="#" class="link-soc _vk"><i class="fa fa-vk"></i></a>
                    <a href="#" class="link-soc _instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="link-soc _facebook"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="footer-menu">
                    <?php wp_nav_menu(['menu'=>'footer']); ?>
                </div>
                <div class="footer-text">
                    Компания Stone Grad - все права защищены ИНН 324234234 УИН 324234234234
                    Юр. адрес: Республика Крым, г.Симферополь ул.Пушкина 3
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/node_modules/slick-carousel/slick/slick.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/magnific.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/script.js"></script>
<?/*<script type="text/javascript" src="<?= get_template_directory_uri() ?>/public/js/vendor.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/public/js/app.js"></script>*/?>
</body>
</html>