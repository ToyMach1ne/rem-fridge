<!DOCTYPE html>
<!-- saved from url=(0022)http://rem-service.by/ -->
<html lang="ru-RU" class="js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
    <link rel="apple-touch-icon" sizes="57x57" href="http://rem-service.by/fav/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://rem-service.by/fav/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://rem-service.by/fav/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://rem-service.by/fav/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://rem-service.by/fav/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://rem-service.by/fav/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://rem-service.by/fav/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://rem-service.by/fav/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://rem-service.by/fav/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="http://rem-service.by/fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="http://rem-service.by/fav/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="http://rem-service.by/fav/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="http://rem-service.by/fav/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="http://rem-service.by/fav/manifest.json">
    <link rel="mask-icon" href="http://rem-service.by/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/fav/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Ремсервис — Ремонт стиральных машин в Минске</title>
    <!-- All in One SEO Pack 2.3.9.1 by Michael Torbert of Semper Fi Web Design[207,257] -->
    <meta name="description" itemprop="description" content="Ремонт стиральных машин в Минске недорого с выездом на дом. Без выходных! Цены снижены. Гарантия от 6 мес. Любые бренды и поломки. +375 (29) 105-28-09">
    <link rel="next" href="http://rem-service.by/page/2/">
    <link rel="canonical" href="http://rem-service.by/">
    <!-- /all in one seo pack -->
    <link rel="dns-prefetch" href="http://s.w.org/">
    <link rel="alternate" type="application/rss+xml" title="Ремсервис » Лента" href="http://rem-service.by/feed/">
    <link rel="alternate" type="application/rss+xml" title="Ремсервис » Лента комментариев" href="http://rem-service.by/comments/feed/">

    <link rel="stylesheet" id="wp-pagenavi-css" href="<?php echo get_template_directory_uri(); ?>/css/main.css" type="text/css" media="all">
    <link rel="https://api.w.org/" href="http://rem-service.by/wp-json/">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://rem-service.by/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://rem-service.by/wp-includes/wlwmanifest.xml">
    <meta name="verify-admitad" content="a5b66c6bbd">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a name="top"></a>
    <header class="header">
        <div class="hed-top">
            <div class="data-block wrap container-fluid">
                <div class="row">
                    <?php query_posts('page_id=30'); if ( have_posts() ) : while ( have_posts() ) : the_post();?>
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
                        </div>
                    </div>
<?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <div class="block-forma wrap container-fluid">
            <?php query_posts('page_id=30'); if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <div class="form-top-info">
                <h1 class="zag-h1">
            <?php the_field('site_slogan'); ?>
                  </h1>
                <span class="span-zag"><?php the_field('under_slogan'); ?></span>
                <span class="span-zag-in"><?php the_field('second_underslogan'); ?></span>
            </div>

            <div class="wrap-form form-bg
      fridge-form-bg      ">
        <div class="application2">Оставьте заявку, мастер свяжется с вами в течение 10 минут!</div>
        <div class="wrapper-form">
          <form action="http://rem-service.by/send.php" method="post" onsubmit="yaCounter34596230.reachGoal('order');return true;">
            <div class="wrap-input">
              <input type="text" placeholder="Ваше имя" name="firstname" required="">
              <input type="tel" placeholder="Ваш телефон" name="phone" class="ytel" required="">

              </div>
            <textarea name="comm" placeholder="Кратко опишите проблему. Например: не включается, течет и т.д."></textarea><input type="hidden" name="type" value="rem">
            <input type="submit" value="Отправить заявку на ремонт"></form>
        </div>
      </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
        <section class="block-info">
        <div class="wrap container-fluid">
            <?php query_posts('page_id=30'); if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            <div class="row">
            <?php if( have_rows('our_committers') ):
    while ( have_rows('our_committers') ) : the_row();
    // vars
        $image = get_sub_field('repeater_image');?>
                <div class="col-lg-3">
                    <div class="wrapper-bl">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                        <span class="title-bl"><?php the_sub_field('committer_title'); ?></span>
                        <p>
                        <?php the_sub_field('committers_description'); ?>
                        </p>
                    </div>
                </div>
                <?php endwhile; else :
                // no rows found
                 endif; ?>
            </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
    </section>
    </header>
