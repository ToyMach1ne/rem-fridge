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
                <div class="col-lg-3 col-lg-rs-in">
                    <div class="wrap-button">
                        <button class="main-modal-submit" data-form="form-1">ЗАКАЗАТЬ ЗВОНОК</button>
                    </div>
                </div>
                <div class="col-lg-3 col-lg-rs">
                    <div class="block-tel">
                        <span><?php the_field('first_telephone'); ?></span>
                        <span><?php the_field('second_telephone'); ?></span>
                        <div class="mode"><?php the_field('work_time'); ?></div>
                        <div class="copyr">Сайт сделан в <a href="http://wsp-design.by/?utm_source=sites&amp;utm_medium=free&amp;utm_campaign=remservice" target="_blank" rel="nofollow">WSP-Design</a></div>
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
            <div class="col-lg-2 col-sm-12 cent"><a href="http://rem-service.by/#top">ВВЕРХ ↑</a></div>
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
    <!--<script src="https://yastatic.net/jquery/2.2.0/jquery.min.js"></script>-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main-modal.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main-script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/APlayer.min.js"></script>
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 935982083;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/conversion.js">
    </script>
    <noscript>
        &lt;div style="display:inline;"&gt; &lt;img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/935982083/?value=0&amp;amp;guid=ON&amp;amp;script=0"/&gt; &lt;/div&gt;
    </noscript>
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type="text/javascript">
    (function() {
        var widget_id = 'u26lKknRq1';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = '//code.jivosite.com/script/widget/' + widget_id;
        var ss = document.getElementsByTagName('script')[0];
        ss.parentNode.insertBefore(s, ss);
    })();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wp-embed.min.js"></script>

    <div class="jivo-iframe-container-right jivo-state-widget jivo-collapsed jivo_shadow jivo_rounded_corners jivo_gradient" id="jivo-iframe-container" style="visibility: visible; width: 38px; margin-bottom: -134.5px; padding-top: 0px; height: 269px; margin-right: 0px; left: auto; right: 0px; bottom: 50%; background-color: transparent !important;">
        <div id="jivo-action-container">
            <div dir="ltr" id="jivo_action" style="display: none; height: 70px;" classname="jivo-desktop">
                <div id="jivo_close_button">
                    <svg id="jivo-icon-closewidget" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

                        <circle class="jivo-st0" cx="12" cy="12" r="11"></circle>
                        <path class="jivo-st1" d="M7.5 16.5l9-9M16.5 16.5l-9-9"></path>
                    </svg>
                </div>
            </div>
            <div id="jivo-drag-handle" style="display: none; height: 70px; cursor: move;"></div>
        </div>
    </div>
    <div id="jivo-mouse-tracker" style="display: none;"></div>
    <?php wp_footer(); ?>


    <script>
    (function(html) {
        html.className = html.className.replace(/\bno-js\b/, 'js')
    })(document.documentElement);
    </script>

    <script type="text/javascript">
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/2\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "http:\/\/rem-service.by\/wp-includes\/js\/wp-emoji-release.min.js?ver=b4a715cbfbf4b15c5eaeb9ddf5c564e5"
        }
    };
    ! function(a, b, c) {
        function d(a) {
            var c, d, e, f, g, h = b.createElement("canvas"),
                i = h.getContext && h.getContext("2d"),
                j = String.fromCharCode;
            if (!i || !i.fillText) return !1;
            switch (i.textBaseline = "top", i.font = "600 32px Arial", a) {
                case "flag":
                    return i.fillText(j(55356, 56806, 55356, 56826), 0, 0), !(h.toDataURL().length < 3e3) && (i.clearRect(0, 0, h.width, h.height), i.fillText(j(55356, 57331, 65039, 8205, 55356, 57096), 0, 0), c = h.toDataURL(), i.clearRect(0, 0, h.width, h.height), i.fillText(j(55356, 57331, 55356, 57096), 0, 0), d = h.toDataURL(), c !== d);
                case "diversity":
                    return i.fillText(j(55356, 57221), 0, 0), e = i.getImageData(16, 16, 1, 1).data, f = e[0] + "," + e[1] + "," + e[2] + "," + e[3], i.fillText(j(55356, 57221, 55356, 57343), 0, 0), e = i.getImageData(16, 16, 1, 1).data, g = e[0] + "," + e[1] + "," + e[2] + "," + e[3], f !== g;
                case "simple":
                    return i.fillText(j(55357, 56835), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0];
                case "unicode8":
                    return i.fillText(j(55356, 57135), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0];
                case "unicode9":
                    return i.fillText(j(55358, 56631), 0, 0), 0 !== i.getImageData(16, 16, 1, 1).data[0]
            }
            return !1
        }

        function e(a) {
            var c = b.createElement("script");
            c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
        }
        var f, g, h, i;
        for (i = Array("simple", "flag", "unicode8", "diversity", "unicode9"), c.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
        c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function() {
            c.DOMReady = !0
        }, c.supports.everything || (g = function() {
            c.readyCallback()
        }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function() {
            "complete" === b.readyState && c.readyCallback()
        })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
    }(window, document, window._wpemojiSettings);
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/wp-emoji-release.min.js" type="text/javascript"></script>
    <script>
                jQuery(document).ready(function() {
                    var ap35 = new APlayer({
                        element: document.getElementById('player35'),
                        narrow: false,
                        autoplay: false,
                        showlrc: false,
                        theme: '#e6d0b2',
                        music: {
                            title: 'Мастер отлично справился',
                            author: 'Владимир Петухов',
                            url: 'http://rem-service.by/wp-content/uploads/2016/02/vladimir-electrolux.mp3'
                        }
                    });
                    ap35.init();
                });
                </script>

                <script>
                jQuery(document).ready(function() {
                    var ap31 = new APlayer({
                        element: document.getElementById('player31'),
                        narrow: false,
                        autoplay: false,
                        showlrc: false,
                        theme: '#e6d0b2',
                        music: {
                            title: 'ремонт',
                            author: 'Татьяна Вершаль',
                            url: 'http://rem-service.by/wp-content/uploads/2016/02/tatjana-lg.mp3'
                        }
                    });
                    ap31.init();
                });
                </script>

</body>

</html>

