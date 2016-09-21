<?php /* Template Name: Page Fix */ get_header(); ?>
<div class="wrap container-fluid">
    <div class="grey-block">
        <!-- Бренды стиральных -->
        <h2 class="h2-style"><span>Ремонтируем <span>стиральные машины</span></span></h2>
        <div class="brandlist">
        <?php query_posts("order=ASC&showposts=50&cat=12"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'style=width=124;height:88;'); ?>

            </a>
            <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
        </div>
        <div class="wrap-button wrap-button-center">
            <button class="main-modal-submit" data-header="Вызвать мастера по ремонту стиральных машин" data-form="form-3">Вызвать мастера</button>
        </div>
    </div>
    <!--grey-block-->
    <!-- Последние отзывы -->
    <div class="wrap-clients">
        <div class="wrap comment-wrap container-fluid">
            <h2 class="h2-style"><span>Отзывы</span></h2>
            <div class="wrap container-fluid">
                <div class="wrap-clients">
                <?php if( have_rows('comment', '36') ):
    while ( have_rows('comment', '36') ) : the_row(); ?>
                    <div class="wrap container-fluid">
                        <div class="client-block-content">
                            <span class="client-title"><?php the_sub_field('name_title'); ?></span>
                            <p><?php the_sub_field('content'); ?></p>
                            <div id="player4023" class="aplayer"></div>
                            <div class="info-name">
                                <strong>Выполненная работа: </strong><?php the_sub_field('job_done'); ?>
                                <br><strong>Марка:</strong> <?php the_sub_field('brand'); ?></div>
                        </div>
                    </div>
                    <?php endwhile; else :
                // no rows found
                 endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!--wrap-clients-->
    <!-- Гарантии -->
    <section class="guarantee guarantee-index">
    <div class="wrap container-fluid">
    <?php if( have_rows('support_mark' , '36') ):
    while ( have_rows('support_mark' , '36') ) : the_row();
    // vars
    $image = get_sub_field('image');?>
      <div class="guarantee-block">
        <h2 class="h2-style"><?php the_sub_field('title'); ?></h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="guarantee-img">
               <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
          </div>
          <div class="col-lg-8">
            <p>
              <?php the_sub_field('text'); ?>
            </p>
          </div>
        </div>
      </div>
      <?php endwhile; else :
                // no rows found
                 endif; ?>
    </div>
  </section>
</div>
<?php get_footer(); ?>
