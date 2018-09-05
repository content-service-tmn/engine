<?php namespace Processwire; ?>

<a href="#callback" data-uk-offcanvas="{mode:'slide'}">callback</a>
<a href="#sidebar" data-uk-offcanvas="{mode:'slide'}">sidebar</a>
<section class="news">
  <div class="container container_center">
    <h3 class="news__subheading">Добро пожаловать</h3>
    <h2 class="news__heading">Мы гордимся нашими работами</h2>
    <div class="news__wrapper">
      <div class="news__grid">
        <div class="news__cell news__cell_40">
          <div class="news__grid">
            <div class="news__cell">
              <div class="news__item">
                <div class="news-block">
                  <p class="news-block__date">Декабрь 3, 2018</p>
                  <h3 class="news-block__heading">Gilette</h3>
                  <p class="news-block__text">Проснувшись однажды утром после беспокойного сна, Грегор Замза
                    обнаружил.после беспокойного сна...</p>
                </div>
              </div>
            </div>
            <div class="news__cell">
              <div class="news__item">
                <div class="news__img news__img_rect"></div>
                <div class="news-block">
                  <p class="news-block__date">Декабрь 3, 2018</p>
                  <h3 class="news-block__heading">Gilette</h3>
                  <p class="news-block__text">Проснувшись однажды утром после беспокойного сна, Грегор Замза
                    обнаружил.после беспокойного сна...</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="news__cell news__cell_60">
          <div class="news__grid">
            <div class="news__cell">
              <div class="news__item">
                <div class="news__img news__img_big"></div>
              </div>
            </div>
            <div class="news__cell news__cell_60">
              <div class="news__item">
                <div class="news__img"></div>
              </div>
            </div>
            <div class="news__cell news__cell_40">
              <div class="news__item">
                <div class="news__img"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="price" style="background-image:url(<?= $config->urls->templates . 'assets/img/boy.jpg' ?>)">
  <div class="price__wrapper">
    <div class="container container_center">
      <div class="price__panel">
        <h3 class="price__heading">Цены альбомов</h3>
        <ul class="price__list">
          <li class="price__item">Планшет <span>1100 руб.</span></li>
          <li class="price__item">Трио <span>1100 руб.</span></li>
          <li class="price__item">Трюмо <span>1100 руб.</span></li>
          <li class="price__item">Книга 20х20 <span>1100 руб.</span></li>
          <li class="price__item">Книга 20х28 <span>1100 руб.</span></li>
          <li class="price__item">Книга 20х25 <span>1100 руб.</span></li>
          <li class="price__item">Фотокнига Люкс (36 стр.) <span>1100 руб.</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="footer">
  <div class="footer__cell">
    <div class="footer__panel">
      <h3 class="footer__heading">Контакты</h3>
      <p class="footer__address">г. Тюмень, ул. Пушкина, дом Колотушкина</p>
      <ul class="footer__list">
        <li class="footer__item"><a href="" class="footer__link footer__link_phone">+7 999 999-99-99</a></li>
        <li class="footer__item"><a href="" class="footer__link footer__link_phone">+7 999 999-99-99</a></li>
        <li class="footer__item"><a href="" class="footer__link footer__link_mail">mail@mail.mail</a></li>
      </ul>
      <div class="footer__socials-wrapper">
        <div class="footer__socials">
          <a href="" class="footer__social footer__social_vk"></a>
          <a href="" class="footer__social footer__social_inst"></a>
          <a href="" class="footer__social footer__social_whatsapp"></a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__cell">
    <div id="google-map" class="footer__map">

    </div>
  </div>
</section>

<section class="scheme">
  <div class="container container_center">
    <div class="scheme__grid">
      <div class="scheme__cell">
        <div class="scheme-block">
          <div class="scheme-block__img"></div>
          <h3 class="scheme-block__heading">Выездная сборка</h3>
          <p class="scheme-block__text">декораций в учебном заведении</p>
        </div>
      </div>
      <div class="scheme__cell">
        <div class="scheme-block">
          <div class="scheme-block__img"></div>
          <h3 class="scheme-block__heading">Выездная сборка</h3>
          <p class="scheme-block__text">декораций в учебном заведении</p>
        </div>
      </div>
      <div class="scheme__cell">
        <div class="scheme-block">
          <div class="scheme-block__img"></div>
          <h3 class="scheme-block__heading">Выездная сборка</h3>
          <p class="scheme-block__text">декораций в учебном заведении</p>
        </div>
      </div>
      <div class="scheme__cell">
        <div class="scheme-block">
          <div class="scheme-block__img"></div>
          <h3 class="scheme-block__heading">Выездная сборка</h3>
          <p class="scheme-block__text">декораций в учебном заведении</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php foreach ($page->blocks as $block): ?>
    <?php if ($block->repeater_matrix_type == 1): ?>
    <section id="header" class="header" style="background-image:url(<?= $config->urls->templates . 'assets/img/capture.jpg' ?>)">
      <div class="header__wrapper">
        <div class="header__grid">
          <div class="header__menu menu">
            <div class="container container_center">
              <div class="menu__grid">
                <a href="" class="menu__logo logo">
                  <img src="<?= $config->urls->templates . 'assets/img/logo.png' ?>" alt="" class="logo__img">
                </a>
                <ul class="menu__nav">
                  <?php foreach ($page->blocks as $item): if (isset($item->anchorForNav) && isset($item->nameForNav) && $item->nameForNav != "" && $item->anchorForNav != ""): ?>
                    <li class="menu__item"><a href="#<?= $item->anchorForNav ?>"
                      class="menu__link"><?= $item->nameForNav ?></a></li>
                    <?php endif; endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="header__panel">
              <div class="container container_center">
                <h3 class="header__subheading"><?= $block->header_header ?></h3>
                <h2 class="header__heading"><?= $block->header_title ?></h2>
                <p class="header__description"><?= $block->header_subtitle ?></p>
                <div class="header__button-wrapper">
                  <a href="" class="header__button">узнать подробнее</a>
                  <a href="" class="header__button">меню</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 6): ?>
    <section id="work" class="work">
      <div class="container container_center">
        <h3 class="work__subheading"><?= $block->list_blocks_header ?></h3>
        <h2 class="work__heading"><?= $block->list_blocks_title ?></h2>
        <p class="work__description"><?= $block->list_blocks_subtitle ?></p>
        <div class="work__wrapper">
          <div class="work__grid">
              <?php foreach ($block->list_blocks_items as $item): ?>
                <div class="work__cell">
                  <div class="work__item work-block">
                    <div class="work-block__header">
                      <div class="work-block__img"></div>
                      <p class="work-block__heading"><?= $item->list_blocks_item_header ?></p>
                    </div>
                    <p class="work-block__description"><?= $item->list_blocks_item_description ?></p>
                      <?= str_replace("<li>", "<li class=\"work-block__item\">", str_replace("<ul>", "<ul class=\"work-block__list\">", $item->list_blocks_item_content)) ?>
                  </div>
                </div>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 7): ?>
    <section id="benefits" class="benefits">
      <div class="container container_center">
        <div class="benefits__header">
          <h3 class="benefits__heading"><?= $block->benefits_title ?></h3>
          <p class="benefits__description">
              <?= $block->benefits_subtitle ?>
          </p>
          <div class="benefits__button-wrapper">
            <a href="" class="benefits__button">получить консультацию</a>
          </div>
        </div>
        <div class="benefits__wrapper">
          <div class="benefits__grid">
              <?php foreach ($block->benefits_items as $item): ?>
                <div class="benefits__cell">
                  <div class="benefits__item benefits-block">
                    <div class="benefits-block__header">
                      <div class="benefits-block__img" style="background-image: url(<?= $item->benefits_item_icon->url ?>)"></div>
                      <p class="benefits-block__heading"><?= $item->benefits_item_header ?></p>
                    </div>
                    <p class="benefits-block__text">
                        <?= $item->benefits_item_content ?>
                    </p>
                  </div>
                </div>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 5): ?>
    <section id="welcome" class="welcome">
      <h3 class="welcome__subheading"><?= $block->lineButton_header ?></h3>
      <h2 class="welcome__heading"><?= $block->lineButton_title ?></h2>
      <p class="welcome__description"><?= $block->lineButton_subtitle ?></p>
      <div class="welcome__button-wrapper">
        <a href="" class="welcome__button">узнать подробнее</a>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 4): ?>
    <section id="prices" class="prices">
      <div class="container container_center">
        <h3 class="prices__subheading"><?= $block->prices_header ?></h3>
        <h2 class="prices__heading"><?= $block->prices_title ?></h2>
        <p class="prices__description"><?= $block->prices_subtitle ?></p>
        <div class="prices__wrapper">
          <div class="prices__grid">
              <?php foreach ($block->prices_items as $item): ?>
                <div class="prices__cell">
                  <div class="prices__item prices-block">
                    <h3 class="prices-block__heading"><?= $item->prices_item_name ?></h3>
                    <div class="prices-block__img" style="background-image:url(<?= $config->urls->templates . 'assets/img/album1.svg' ?>)"></div>
                    <h3 class="prices-block__price"><?= $item->prices_item_price ?></h3>
                      <?= str_replace("<li>", "<li class=\"prices-block__item\">", str_replace("<ul>", "<ul class=\"prices-block__list\">", $item->prices_item_content)) ?>
                    <div class="prices-block__button-wrapper">
                      <a href="" class="prices-block__button">купить тариф</a>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 2): ?>
    <section id="text-block" class="text-block">
      <div class="container container_center">
        <div class="text-block__grid">
          <div class="text-block__cell">
            <div class="text-block__img-wrapper">
              <img src="<?= $block->picWithList_img->url ?>" alt="" class="text-block__img">
            </div>
          </div>
          <div class="text-block__cell">
            <h3 class="text-block__heading"><?= $block->picWithList_title ?></h3>
            <p class="text-block__text"><?= $block->picWithList_description ?></p>
              <?= str_replace("<li>", "<li class=\"text-block__item\">", str_replace("<ul>", "<ul class=\"text-block__list\">", $block->picWithList_content)) ?>
            <p class="text-block__quote"><?= $block->picWithList_bottom_line1 ?></p>
            <p class="text-block__name"><?= $block->picWithList_bottom_line2 ?></p>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 8): ?>
        <?php
        $placeholders = ["E-mail" => "E-mail", "Phone" => "Номер телефона"];
        $validators = ["E-mail" => "", "Phone" => ""];
        ?>
    <section class="more" style="background-image:url(<?= $config->urls->templates . 'assets/img/main.jpg' ?>)">
      <div class="more__wrapper">
        <h3 class="more__subheading"><?= $block->inputBlock_header ?></h3>
        <h2 class="more__heading"><?= $block->inputBlock_title ?></h2>
        <p class="more__description"><?= $block->inputBlock_subtitle ?></p>
        <form action="" class="form">
          <div class="more__form">
            <div class="more__element form__element">
              <label class="form__label" for="more"><?= $placeholders[$block->inputBlock_inputType] ?></label>
              <input name="more" id="more" class="form__input"
              data-validator="<?= $validators[$block->inputBlock_inputType] ?>"> </input>
            </div>
            <div class="more__element form__submit submit">
              <span class="submit__label">узнать подробнее</span>
              <button class="submit__button"></button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <?php endif; ?>
    <?php if ($block->repeater_matrix_type == 3): ?>
    <section class="slideshow-section">
      <div class="container container_center">
        <div class="uk-slidenav-position" data-uk-slideshow="{duration:300}">
          <ul class="slideshow uk-slideshow">
              <?php foreach ($block->slides as $slide): ?>
                <li class="slideshow__cell">
                  <div class="slideshow__item">
                    <div class="slideshow__img" style="background-image: url(<?= $slide->slide_image->url ?>)">
                    </div>
                    <div class="slideshow__panel">
                      <h3 class="slideshow__subheading"><?= $slide->slide_header ?></h3>
                      <h2 class="slideshow__heading"><?= $slide->slide_title ?></h2>
                      <p class="slideshow__description"><?= $slide->slide_subtitle ?></p>
                    </div>
                    <div class="slideshow__panel">
                      <div class="slideshow__button-wrapper">
                        <a href="" class="slideshow__button">Посмотреть все страницы</a>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endforeach; ?>
          </ul>
          <a href="" class="slideshow__nav nav nav_prev" data-uk-slideshow-item="previous"></a>
          <a href="" class="slideshow__nav nav nav_next" data-uk-slideshow-item="next"></a>
          <ul class="dotnav slideshow__dotnav uk-slideshow-nav uk-dotnav">
              <?php foreach ($block->slides as $i => $slide): ?>
                <li data-uk-slideshow-item="<?= $i ?>"><a href=""></a></li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>

    <?php endif; ?>


    <?php if ($block->repeater_matrix_type == 8): ?>
    <section class="slideset-section">
      <div class="container container_center">
        <div data-uk-slideset="{default: 2}">
          <div class="uk-slidenav-position">
            <ul class="slideset uk-slideset">
                <?php foreach ($block->slides as $slide): ?>
                  <li class="slideset__cell">
                    <div class="slideset__item">
                      <div class="slideset__img" style="background-image: url(<?= $slide->slide_image->url ?>)"></div>
                      <div class="slideset__panel">
                        <h3 class="slideset__subheading"><?= $slide->slide_header ?></h3>
                        <h2 class="slideset__heading"><?= $slide->slide_title ?></h2>
                        <p class="slideset__description"><?= $slide->slide_subtitle ?></p>
                      </div>
                    </div>
                  </li>
                <?php endforeach; ?>
            </ul>
            <a href="" class="slideset__nav nav nav_prev" data-uk-slideset-item="previous"></a>
            <a href="" class="slideset__nav nav nav_next" data-uk-slideset-item="next"></a>
          </div>
          <ul class="dotnav slideset__dotnav uk-slideset-nav uk-dotnav"></ul>
        </div>
      </div>
    </section>
    <?php endif; ?>
<?php endforeach; ?>
