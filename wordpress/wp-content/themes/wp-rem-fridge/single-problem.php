<?php get_header(); ?>
<div class="wrap container-fluid">
  <div class="services-block wrap container-fluid wrap_breadcrumbs">
    <div class="breadcrumbs">
      <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
        <a href="<?php echo home_url(); ?>" itemprop="url">
        <span itemprop="title">Главная</span></a>
      </span> <span class="sep">›</span>
      <span class="current"><?php the_title(); ?></span>
    </div><!-- .breadcrumbs -->
  </div>

  <h2 class="h2-style">Цены на ремонт (запчасти включены)</h2>
<div class="wrap-table table-responsive">
  <noindex>
    <table width="100%">
      <tbody>
        <tr style="height: 24px;">
          <th style="height: 24px;" width="60%">Вид услуги</th>
          <th style="height: 24px;">Стоимость, руб. (BYN)</th>
        </tr>
        <?php query_posts("order=ASC&showposts=50&cat=10"); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <tr style="height: 24px;">
           <td style="height: 24px;">
             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </td>
           <td style="height: 24px;"><?php the_field('price'); ?></td>
        </tr>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
    </tbody>
  </table>
<p>&nbsp;</p>
</noindex>
    <span class="description-tb">
      *Итоговая стоимость ремонта зависит от трудоемкости работ и стоимости запасных частей.
    </span>
</div>
  <div class="text-content">
    <article id="post-58" class="post-58 post type-post status-publish format-standard hentry category-problemy-so-stiralnymi-mashinami">
      <header class="entry-header">
        <h1 class="entry-title">
        Устраняем проблемы с холодильниками: <span class="lowertitle"><?php the_title(); ?>
        </span>
        </h1>
      </header><!-- .entry-header -->

      <div class="entry-content">
        <p><?php the_content(); ?></p>
      </div><!-- .entry-content -->

    </article><!-- #post-## -->
  </div>

  <section class="guarantee guarantee-index">
    <div class="wrap container-fluid">
      <?php if( have_rows('support_mark' , '68') ):
      while ( have_rows('support_mark' , '68') ) : the_row();
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
        <?php endwhile; endif; ?>
    </div>
  </section>

  <section class="clients">
    <h2 class="h2-style">Отзывы наших клиентов</h2>
    <div class="wrap-clients">
                <?php if( have_rows('comment', '68') ):
    while ( have_rows('comment', '68') ) : the_row(); ?>
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
                    <?php endwhile; endif; ?>

    </div>
  </section>
  </noindex>

  <section class="block-form wrap container-fluid">
    <div class="wrap-form wrap-form-int">
      <div class="wrapper-form-int wrapper-form-int-fridge">
        <div class="application2">Оставьте заявку, мастер свяжется с вами в течение 10 минут!</div>
        <div class="wrapper-form">
          <?php echo do_shortcode('[contact-form-7 id="186" title="form"]'); ?>
          <div class="tel-form">
            <span>Или звоните:</span>
            +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Выводим другие бренды -->

    <h2 class="h2-style">Ремонтируем также холодильники других брендов</h2>
    <div class="brandlist">
        <?php query_posts("order=ASC&showposts=50&cat=8"); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail'); ?>

            </a>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>

  <div class="problem-list">
    <h2 class="h2-style">Устраняем все поломки</h2>
    <div class="row">
      <div class="list-li">
        <ul>
              <?php query_posts("order=ASC&showposts=50&cat=9"); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>


        </ul>
      </div>
    </div>
  </div><!--list-info-->

</div>
<?php get_footer(); ?>

