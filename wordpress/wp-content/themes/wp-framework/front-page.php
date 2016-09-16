<?php /* Template Name: Home Page */ get_header(); ?>
<section class="gift">
      <div class="wrap container-fluid">
          <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-12 giftfoto">
                  <img src="http://rem-service.by/wp-content/themes/rem-service/img/gubka.png" alt="Губки в подарок" width="194" height="194">
                    <p>Набор губок из 5 шт.</p>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-12 gifttext">
                  <p class="giftzag">Вызовите мастера прямо сейчас и получите <br><span>в подарок набор губок!</span></p>
                    <div class="row">
                      <div class="col-lg-5 col-sm-12 col-md-12 gbutton">
                          <button class="main-modal-gift-submit" data-form="form-4">Оставить заявку на ремонт <span>и получить подарок</span></button>
                        </div>
                        <div class="col-lg-2 col-sm-12 col-md-12 vyzov">
                        либо вызвать мастера <br>по телефонам:
                        </div>
                        <div class="col-lg-5 col-sm-12 col-md-12 phones">
                          +375 (29) 105-28-09 (вел)<br>+375 (33) 684-68-44 (мтс)
                        </div>
                    </div>
                    <p class="srok">Акция действует только <span>15.09.2016 г. до 21.00</span>. Спешите!</p>
                </div>
            </div>
        </div>
    </section>
    <div class="services-block wrap container-fluid wrap_breadcrumbs">
    </div>
    <section class="services">
        <div class="services-block wrap container-fluid">
            <div class="row">
                <?php get_sidebar(); ?>
                <div class="col-lg-9">
                    <h2 class="h2-style">Цены на ремонт (запчасти включены)</h2>
                    <div class="wrap-table table-responsive">
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
                        <span class="description-tb">
              *Итоговая стоимость ремонта зависит от трудоемкости работ и стоимости запасных частей.
            </span>
                    </div>
                    <article>
                       <?php the_field('text_before_footer'); ?>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="block-form wrap container-fluid">
        <div class="wrap-form wrap-form-int">
            <div class="wrapper-form-int wrapper-form-int-fridge">
        <div class="application2">Оставьте заявку, мастер свяжется с вами в течение 10 минут!</div>
        <div class="wrapper-form">
          <form action="http://rem-service.by/send.php" method="post" onsubmit="yaCounter34596230.reachGoal('order');return true;">
            <div class="wrap-input">
              <input type="text" placeholder="Ваше имя" name="firstname" required="">
              <input type="tel" placeholder="Ваш телефон" name="phone" class="ytel" required="">
              <select name="brand">
                <option value="no" selected="">Бренд холодильника</option>

                                    <option value="Ariston">Ariston</option>
                                    <option value="Electrolux">Electrolux</option>
                                    <option value="Indesit">Indesit</option>
                                    <option value="LG">LG</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Stinol">Stinol</option>
                                    <option value="Атлант">Атлант</option>
                                              </select></div>
            <textarea name="comm" placeholder="Кратко опишите проблему. Например: не включается, течет и т.д."></textarea><input type="hidden" name="type" value="rem">
            <input type="submit" value="Отправить заявку на ремонт"></form>
          <div class="tel-form">
            <span>Или звоните:</span>
            +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
          </div>
        </div>
      </div>
        </div>
    </section>
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
      <?php endwhile; else :
                // no rows found
                 endif; ?>
    </div>
    </section>
    <noindex>
        <section class="clients">
            <h2 class="h2-style">Отзывы наших клиентов</h2>
            <div class="wrap-clients">
                <div class="wrap container-fluid">
                                <?php if( have_rows('comment', '68') ):
    while ( have_rows('comment', '68') ) : the_row(); ?>
                    <div class="client-block-content">
                        <span class="client-title"><?php the_sub_field('name_title'); ?></span>
                        <p><?php the_sub_field('content'); ?></p>
                        <div id="player4023" class="aplayer"></div>
                        <div class="info-name">
                            <strong>Выполненная работа: </strong><?php the_sub_field('job_done'); ?>
                            <br><strong>Марка:</strong> <?php the_sub_field('brand'); ?></div>
                    </div>
                    <?php endwhile; else :
                // no rows found
                 endif; ?>
                </div>

            </div>
        </section>
    </noindex>
    <!-- <section class="block-information wrap container-fluid">
    <div class="wrap-information">
      <div class="block-information-txt">
        <p>
          Можно купить новую стиральную машину, но зачем терять деньги и бесценное время? Куда проще обратиться к <strong>опытным мастерам</strong> , которые оперативно решат ваши проблемы.
        </p>
        <p>
          Достаточно позвонить нам или вызвать мастера через
          <strong>форму на сайте</strong> . Наши мастера свяжутся с вами<strong> в течение 10 минут!
          </strong>
        </p>
      </div>
      <div class="block-information-img">
        <img class="img-responsive" src="http://rem-service.by/wp-content/themes/rem-service/img/img-master.jpg" alt=""/>
      </div>
    </div>
  </section> -->
    <section class="block-form wrap container-fluid">
        <div class="wrap-form wrap-form-int">
            <div class="wrapper-form-int wrapper-form-int-fridge">
        <div class="application2">Оставьте заявку, мастер свяжется с вами в течение 10 минут!</div>
        <div class="wrapper-form">
          <form action="http://rem-service.by/send.php" method="post" onsubmit="yaCounter34596230.reachGoal('order');return true;">
            <div class="wrap-input">
              <input type="text" placeholder="Ваше имя" name="firstname" required="">
              <input type="tel" placeholder="Ваш телефон" name="phone" class="ytel" required="">
              <select name="brand">
                <option value="no" selected="">Бренд холодильника</option>

                                    <option value="Ariston">Ariston</option>
                                    <option value="Electrolux">Electrolux</option>
                                    <option value="Indesit">Indesit</option>
                                    <option value="LG">LG</option>
                                    <option value="Samsung">Samsung</option>
                                    <option value="Stinol">Stinol</option>
                                    <option value="Атлант">Атлант</option>
                                              </select></div>
            <textarea name="comm" placeholder="Кратко опишите проблему. Например: не включается, течет и т.д."></textarea><input type="hidden" name="type" value="rem">
            <input type="submit" value="Отправить заявку на ремонт"></form>
          <div class="tel-form">
            <span>Или звоните:</span>
            +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
          </div>
        </div>
      </div>
        </div>
    </section>

    <?php get_footer(); ?>
