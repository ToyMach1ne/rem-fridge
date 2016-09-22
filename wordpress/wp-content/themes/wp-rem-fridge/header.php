<!DOCTYPE html>
<html lang="ru-RU" class="js">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

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
          <form action="#" method="post">
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
