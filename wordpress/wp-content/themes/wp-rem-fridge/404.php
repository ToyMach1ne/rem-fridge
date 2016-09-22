<?php get_header(); ?>
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <section class="error-404 not-found">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <h1 class="page-title-404">404 - страница не найдена</h1>
              <p class="podh1-404">К сожалению, данная страница не существует, либо была удалена.</p>
              <div class="page-content-404">
                <p>Вы можете оставить заявку на ремонт прямо сейчас в форме вверху страницы или по телефону.</p>
                <p>А можете просто выбрать нужный вам раздел из списка ниже:</p>
                <div class="menu-nizhnee-menyu-rubriki-container">
                  <ul id="menu-nizhnee-menyu-rubriki" class="menu">
                    <li id="menu-item-90" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-90"><a href="<?php echo home_url(); ?>">Ремонт Холодильников</a>
                    </li>
                    <li id="menu-item-91" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-91"><a href="#">Ремонт холодильников</a>
                    </li>
                    <li id="menu-item-4205" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4205"><a href="#">Полезные советы</a>
                    </li>
                    <li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="#">Отзывы</a>
                    </li>
                    <li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a href="#">Контакты</a>
                    </li>
                  </ul>
                </div>
              </div><!-- .page-content -->
            </div>
          </div>
        </div>
      </section><!-- .error-404 -->
    </main><!-- .site-main -->
  </div>

<?php get_footer(); ?>
