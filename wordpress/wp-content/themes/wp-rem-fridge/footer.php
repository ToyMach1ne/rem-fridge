     <div class="wrap_bottom_menu">
        <div class="wrap container-fluid bottom_menu">
            <div class="menu-nizhnee-menyu-rubriki-container">
                <ul id="menu-nizhnee-menyu-rubriki" class="menu">
                    <?php wpeFootNav(); ?>
                </ul>
            </div>
        </div>
    </div>
  <footer class="footer">
        <div class="data-block wrap container-fluid">
        <?php query_posts('page_id=30'); if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <div class="row">
                <div class="col-lg-6">
                    <figure class="logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" alt="">
                                </a>
                    </figure>
                    <div class="txt-logo">
                        <div class="site-url"><?php the_field('site_name'); ?></div>
                        <span class="txt-logo-in">
                                  <?php the_field('under_text'); ?>
                            </span>
                        <span class="txt-logo-int"><?php the_field('second_text'); ?></span>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-rs-in button-call">
                    <div class="wrap-button">
                        <button class="main-modal-submit" data-form="form-1">ЗАКАЗАТЬ ЗВОНОК</button>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-rs">
                    <div class="block-tel">
                        <span><?php the_field('first_telephone'); ?></span>
                        <span><?php the_field('second_telephone'); ?></span>
                        <div class="mode"><?php the_field('work_time'); ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
    </footer>
    <div class="botpanel">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <button class="main-modal-submit" data-form="form-3">Быстрый вызов мастера</button>
            </div>
            <div class="col-lg-6 col-sm-12 cent">Звоните ежедневно с 9 до 21: <strong>+375 (29) 105-28-09, +375 (33) 684-68-44</strong></div>
            <div class="col-lg-2 col-sm-12 cent"><a href="<?php echo home_url(); ?>/#top">ВВЕРХ ↑</a></div>
        </div>
    </div>
    <!--Модальное окно-->
    <div class="form-wrapper-main-modal" data-form="form-1">
        <div class="form-wrapper-modal-table">
            <div class="main-modal-block-int">
                <div class="main-modal-block-form">
                    <div class="modal-close"></div>
                    <form class="main-modal-form" action="http://rem-service.by/send.php" method="post" name="form_data" onsubmit="yaCounter34596230.reachGoal(&#39;call&#39;);return true;">
                        <div class="modal-zag">Мы перезвоним в течение 10 минут!</div>
                        <input class="main-modal-name" name="firstname" type="text" placeholder="Ваше Имя" required="">
                        <input class="main-modal-tel" name="phone" type="tel" placeholder="Ваш Телефон" id="yphone2" required="">
                        <input type="hidden" name="type" value="zvonok">
                        <input type="submit" class="submit-modal" value="Перезвоните мне!">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="form-wrapper-main-modal" data-form="form-3">
        <div class="form-wrapper-modal-table">
            <div class="main-modal-block-int">
                <div class="main-modal-block-form">
                    <div class="modal-close"></div>
                    <form class="main-modal-brand-form" action="http://rem-service.by/send.php" method="post" name="form_data" onsubmit="yaCounter34596230.reachGoal(&#39;call&#39;);return true;">
                        <div class="modal-zag modal-zag3">Быстрый вызов мастера на дом</div>
                        <input class="main-modal-name" name="firstname" type="text" placeholder="Ваше имя" required="">
                        <input class="main-modal-tel" name="phone" type="tel" id="yphone" placeholder="Ваш телефон" required="">
                        <input type="submit" class="submit-modal" value="Вызвать мастера">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Модальное окно подарка-->
    <div class="form-wrapper-main-modal" data-form="form-4">
        <div class="form-wrapper-modal-table">
            <div class="main-modal-block-int">
                <div class="main-modal-block-form">
                    <div class="modal-close"></div>
                    <form class="main-modal-problem-form" action="http://rem-service.by/send.php" method="post" name="form_data" onsubmit="yaCounter34596230.reachGoal(&#39;order&#39;);return true;">
                        <div class="modal-zag"></div>
                        <input class="main-modal-name" name="firstname" type="text" placeholder="Ваше имя" required="">
                        <input class="main-modal-tel" name="phone" type="tel" id="yphoneiii" placeholder="Ваш телефон" required="">
                        <input type="hidden" name="type" value="problemvs">
                        <input type="hidden" name="brand" class="inpbr">
                        <input type="submit" class="submit-modal" value="Вызвать мастера">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    jQuery('button.main-modal-submit').click(function() {
        var data_header = jQuery(this).data('header');
        jQuery('.form-wrapper-main-modal .modal-zag3').text(data_header);
    });
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/old-ie.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main-modal.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main-script.js"></script>

    <?php wp_footer(); ?>


    <script>
    (function(html) {
        html.className = html.className.replace(/\bno-js\b/, 'js')
    })(document.documentElement);
    </script>



</body>

</html>

