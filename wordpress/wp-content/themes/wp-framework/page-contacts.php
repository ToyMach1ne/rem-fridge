<?php /* Template Name: Page Contacts */ get_header(); ?>
    <div class="services-block wrap container-fluid wrap_breadcrumbs">
    <div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
    <a href="<?php echo home_url(); ?>" itemprop="url"><span itemprop="title">Главная</span></a>
            </span>
            </div>
        <!-- .breadcrumbs -->
    </div>
    <div class="wrap container-fluid">
        <article id="post-2" class="post-2 page type-page status-publish hentry">
            <!-- .entry-header -->
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <!-- .entry-content -->
        </article>
        <!-- #post-## -->
    </div>
    <!-- .wrap container-fluid -->
    <?php get_footer(); ?>
