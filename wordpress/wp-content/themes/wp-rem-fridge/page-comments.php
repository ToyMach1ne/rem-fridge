<?php /* Template Name: Page Comments */ get_header(); ?>
    <div class="services-block wrap container-fluid wrap_breadcrumbs">
        <div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://rem-service.by/" itemprop="url"><span itemprop="title">Главная</span></a>
            </span> <span class="sep">›</span> <span class="current">Отзывы</span></div>
        <!-- .breadcrumbs -->
    </div>
    <noindex>
        <section class="wrap-clients wrap">
            <div class="wrap comment-wrap container-fluid">
                <h2 class="h2-style"><span>Отзывы</span></h2>
                <?php if( have_rows('comment') ):
    while ( have_rows('comment') ) : the_row(); ?>
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
            <!-- .wrap container-fluid -->
        </section>
    </noindex>
     <?php get_footer(); ?>
