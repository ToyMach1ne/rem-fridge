<?php get_header(); ?>
<div class="wrap container-fluid">
    <section class="services pad30">
        <div class="services-block wrap container-fluid">
            <div class="row">
                <?php get_sidebar(); ?>
                <div class="col-lg-9 cont-block">
                    <div class="wrap container-fluid wrap_breadcrumbs sovet">
                        <div class="breadcrumbs"><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="<?php echo home_url(); ?>" itemprop="url"><span itemprop="title">Главная</span></a>
                            </span> <span class="sep">›</span> <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://rem-service.by/category/poleznye-sovety/" itemprop="url"><span itemprop="title">Полезные советы</span></a>
                            </span> <span class="sep">›</span> <span class="current"><?php the_title(); ?></span></div>
                        <!-- .breadcrumbs -->
                    </div>
                    <h1><?php the_title(); ?></h1>

                    <div class="cont-all">
                    <p> <?php the_content(); ?></p>
                    </div>
                    <div class="incf2">
                        <section class="block-form wrap container-fluid">
                            <div class="wrap-form wrap-form-int">
                                <div class="wrapper-form-int">
                                    <div class="application2">Нужен ремонт стиральной машины? Оставьте заявку!</div>
                                    <div class="wrapper-form">
                                        <form action="http://rem-service.by/send.php" method="post" onsubmit="yaCounter34596230.reachGoal(&#39;order&#39;);return true;">
                                            <div class="wrap-input">
                                                <input type="text" placeholder="Ваше имя" name="firstname" required="">
                                                <input type="tel" placeholder="Ваш телефон" name="phone" class="ytel" required="">
                                                <select name="brand">
                                                    <option value="no" selected="">Бренд стиральной машины</option>
                                                    <option value="AEG">AEG</option>
                                                    <option value="Ardo">Ardo</option>
                                                    <option value="Ariston">Ariston</option>
                                                    <option value="Asko">Asko</option>
                                                    <option value="Bauknecht">Bauknecht</option>
                                                    <option value="Beko">Beko</option>
                                                    <option value="Bosch">Bosch</option>
                                                    <option value="Brandt">Brandt</option>
                                                    <option value="Candy">Candy</option>
                                                    <option value="Daewoo">Daewoo</option>
                                                    <option value="Electrolux">Electrolux</option>
                                                    <option value="Euronova">Euronova</option>
                                                    <option value="General Electric">General Electric</option>
                                                    <option value="Gorenje">Gorenje</option>
                                                    <option value="Hansa">Hansa</option>
                                                    <option value="Indesit">Indesit</option>
                                                    <option value="Kaiser">Kaiser</option>
                                                    <option value="LG">LG</option>
                                                    <option value="Miele">Miele</option>
                                                    <option value="Otsein">Otsein</option>
                                                    <option value="Philco">Philco</option>
                                                    <option value="Privileg">Privileg</option>
                                                    <option value="Rosieres">Rosieres</option>
                                                    <option value="Samsung">Samsung</option>
                                                    <option value="Siemens">Siemens</option>
                                                    <option value="Thomson">Thomson</option>
                                                    <option value="Whirlpool">Whirlpool</option>
                                                    <option value="Zanussi">Zanussi</option>
                                                    <option value="Атлант">Атлант</option>
                                                </select>
                                            </div>
                                            <textarea name="comm" placeholder="Кратко опишите проблему. Например: не включается, течет и т.д."></textarea>
                                            <input type="hidden" name="type" value="rem">
                                            <input type="submit" value="Отправить заявку на ремонт">
                                        </form>
                                        <div class="tel-form">
                                            <span>Или звоните:</span> +375(29) 105-28-09 (вел), +375 (33) 684-68-44 (мтс)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
