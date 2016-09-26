     <div class="wrap_bottom_menu">
        <div class="wrap container-fluid bottom_menu">
            <div class="menu-nizhnee-menyu-rubriki-container">
                    <?php wpeFootNav(); ?>
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
    <?php query_posts('page_id=30'); if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <button class="main-modal-submit" data-form="form-3"><?php the_field('bar_title'); ?></button>
            </div>
            <div class="col-lg-6 col-sm-12 cent"><?php the_field('call_time'); ?> <strong><?php the_field('phone_number'); ?>, <?php the_field('second_phone_number'); ?></strong></div>
            <div class="col-lg-2 col-sm-12 cent"><a href="<?php echo home_url(); ?>/#top">ВВЕРХ ↑</a></div>
        </div>
        <?php endwhile; endif; wp_reset_query(); ?>
    </div>
    <!--Модальное окно-->
    <div class="form-wrapper-main-modal" data-form="form-1">
        <div class="form-wrapper-modal-table">
            <div class="main-modal-block-int">
                <div class="main-modal-block-form">
                    <div class="modal-close"></div>
                    <?php echo do_shortcode('[contact-form-7 id="189" title="footer form"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-wrapper-main-modal" data-form="form-3">
        <div class="form-wrapper-modal-table">
            <div class="main-modal-block-int">
                <div class="main-modal-block-form">
                    <div class="modal-close"></div>
                    <?php echo do_shortcode('[contact-form-7 id="189" title="footer form"]'); ?>
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
                    <?php echo do_shortcode('[contact-form-7 id="189" title="footer form"]'); ?>
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

