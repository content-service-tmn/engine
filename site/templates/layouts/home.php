<?php namespace Processwire; ?>


<!--<section class="news">
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
</section>  -->

<a href="" class="burger"></a>

<section id="menu" class="menu__wrapper">
  <div class="menu menu_contrast">
    <div class="container container_center">
      <div class="menu__grid">
        <a href="" class="menu__logo logo">
          <img src="<?= $config->urls->templates . 'assets/img/logo.png' ?>" alt="" class="logo__img">
        </a>
        <ul class="menu__nav">
          <?php foreach ($page->blocks as $item): if (isset($item->anchorForNav) && isset($item->nameForNav) && $item->nameForNav != "" && $item->anchorForNav != ""): ?>
            <li class="menu__item"><a href="#<?= $item->anchorForNav ?>"
              class="menu__link menu__link_contrast"><?= $item->nameForNav ?></a></li>
            <?php endif; endforeach; ?>
          </ul>
        </div>
      </div>
  </div>
</section>

<?php foreach ($page->blocks as $block): bd($block->repeater_matrix_type); ?>
    <?php if ($block->repeater_matrix_type == 1): ?>
    <section id="header" class="header"
             style="background-image:url(<?= $config->urls->templates . 'assets/img/capture.jpg' ?>)">
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
                <a href="#callback" data-uk-offcanvas="{mode:'slide'}" data-source="header" class="header__button callform">узнать подробнее</a>
                <a href="#sidebar" data-uk-offcanvas="{mode:'slide'}" class="header__button">меню</a>
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
            <a href="#callback" data-uk-offcanvas="{mode:'slide'}" data-source="Получить консультацию (блок преимуществ)" class="benefits__button callform">получить консультацию</a>
          </div>
        </div>
        <div class="benefits__wrapper">
          <div class="benefits__grid">
              <?php foreach ($block->benefits_items as $item): ?>
                <div class="benefits__cell">
                  <div class="benefits__item benefits-block">
                    <div class="benefits-block__header">
                      <div class="benefits-block__img"
                           style="background-image: url(<?= $item->benefits_item_icon->url ?>)"></div>
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
                    <div class="prices-block__img"
                         style="background-image:url(<?= $config->urls->templates . 'assets/img/album1.svg' ?>)"></div>
                    <h3 class="prices-block__price"><?= $item->prices_item_price ?></h3>
                      <?= str_replace("<li>", "<li class=\"prices-block__item\">", str_replace("<ul>", "<ul class=\"prices-block__list\">", $item->prices_item_content)) ?>
                    <div class="prices-block__button-wrapper">
                      <a href="#callback" data-uk-offcanvas="{mode:'slide'}" data-source="Купить <?= $item->prices_item_name ?>" class="prices-block__button callform">купить тариф</a>
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
              <input name="more" id="more" class="form__input js-input"
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
    <section id="photoareas" class="slideshow-section" style="background-image:url(<?= $config->urls->templates . 'assets/img/bg.jpg' ?>)">
      <div class="container container_center">
        <h3 class="slideshow-section__subheading">Надзаголовок</h3>
        <h2 class="slideshow-section__heading">Заголовок</h2>
        <div class="uk-slidenav-position" data-uk-slideshow="{duration:300}">
          <ul class="slideshow uk-slideshow slideshow-section__slideshow">
              <?php foreach ($block->slides as $slide): ?>
                <li class="slideshow__cell">
                  <div class="slideshow__item">
                    <div class="slideshow__img" style="background-image: url(<?= $slide->slide_images->first()->url ?>)">
                    </div>
                    <div class="slideshow__panel">
                      <h3 class="slideshow__subheading"><?= $slide->slide_header ?></h3>
                      <h2 class="slideshow__heading"><?= $slide->slide_title ?></h2>
                      <p class="slideshow__description"><?= $slide->slide_subtitle ?></p>
                    </div>
                    <div class="slideshow__panel">
                      <div class="slideshow__button-wrapper">
                        <a href="<?= $slide->slide_images->first()->url ?>" class="slideshow__button" data-uk-lightbox="{group:'mygroup'}">Посмотреть все страницы</a>
                        <?php foreach($slide->slide_images as $image): ?>
                        	<a href="<?= $image->url ?>" data-uk-lightbox="{group:'mygroup".<?$block->id?>."'}"></a>
                        <?php endforeach; ?>
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


    <?php if ($block->repeater_matrix_type == 9): ?>
    <section id="albums" class="slideset-section" style="background-image:url(<?= $config->urls->templates . 'assets/img/bg.jpg' ?>)">
      <div class="container container_center">
        <h3 class="slideset-section__subheading">Надзаголовок</h3>
        <h2 class="slideset-section__heading">Заголовок</h2>
        <div data-uk-slideset="{default: 1,medium:2}">
          <div class="uk-slidenav-position slideset-section__slideset">
            <ul class="slideset uk-slideset">
                <?php foreach ($block->slides as $slide): ?>
                  <li class="slideset__cell">
                    <div class="slideset__item">
                      <div class="slideset__img" style="background-image: url(<?= $slide->slide_images->first()->url ?>)">
                        <a href="<?= $slide->slide_images->first()->url ?>" class="slideset__link" data-uk-lightbox="{group:'1'}"></a>
                      </div>
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

    <?php if ($block->repeater_matrix_type == 10): ?>
    <section class="price" style="background-image:url(<?= $config->urls->templates . 'assets/img/boy.jpg' ?>)">
      <div class="price__wrapper">
        <div class="container container_center">
          <div class="price__panel">
            <h3 class="price__heading"><?= $block->prices_title ?></h3>
            <ul class="price__list">
                <?php foreach ($block->prices_table as $row): ?>
                  <li class="price__item"><?= $row->name ?><span><?= $row->price ?></span></li>
                <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php if ($block->repeater_matrix_type == 11): ?>
    <section id="contacts" class="footer">
      <div class="footer__cell">
        <div class="footer__panel">
          <h3 class="footer__heading">Контакты</h3>
          <p class="footer__address"><?= $block->home_address ?></p>
          <ul class="footer__list">
              <?php foreach (explode(',', $block->home_phone) as $phone): ?>
                <li class="footer__item"><a href="tel:<?= phoneLink($phone) ?>"
                                            class="footer__link footer__link_phone"><?= $phone ?></a></li>
              <?php endforeach; ?>
            <li class="footer__item"><a href="mailto:<?= $block->email ?>" class="footer__link footer__link_mail"><?= $block->email ?></a></li>
          </ul>
          <div class="footer__socials-wrapper">
            <div class="footer__socials">
              <a href="<?= $block->home_vkontakte ?>" target="_blank" class="footer__social footer__social_vk"></a>
              <a href="<?= $block->home_instagram ?>" target="_blank" class="footer__social footer__social_inst"></a>
              <a href="https://api.whatsapp.com/send?phone=<?= $block->home_whatsapp ?>" target="_blank"
                 class="footer__social footer__social_whatsapp"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__cell">
        <div id="google-map" class="footer__map">
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php if ($block->repeater_matrix_type == 12): ?>
    <section id="scheme" class="scheme">
      <div class="container container_center">
        <div class="scheme__grid">
            <?php foreach ($block->scheme as $step): ?>
              <div class="scheme__cell">
                <div class="scheme-block">
                  <div class="scheme-block__img"
                       style="background-image: url(<?= $step->scheme_item_icon->url ?>)"></div>
                  <h3 class="scheme-block__heading"><?= $step->scheme_item_title ?></h3>
                  <p class="scheme-block__text"><?= $step->scheme_item_description ?></p>
                </div>
              </div>
            <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php if ($block->repeater_matrix_type == 13): ?>
    <section id="feedbacks" class="reviews"style=" background-image:url(<?= $config->urls->templates . 'assets/img/bg.jpg' ?>)">
      <div class="container container_center">
        <h3 class="reviews__subheading"><?= $block->feedbacks_header ?></h3>
        <h2 class="reviews__heading"><?= $block->feedbacks_title ?></h2>
        <div data-uk-slideset="{default: 2}">
          <div class="uk-slidenav-position reviews__slideset">
            <ul class="slideset uk-slideset">
                <?php foreach ($block->feedbacks_items as $feedback): ?>
                  <li class="slideset__cell">
                    <div class="reviews__item">
                      <div class="reviews__img"
                           style="background-image:url(<?= $feedback->feedbacks_item_img->url ?>)"></div>
                      <p class="reviews__text"><?= $feedback->feedbacks_item_content ?></p>
                      <div class="reviews__author">
                        <h2 class="reviews__name"><?= $feedback->feedbacks_item_name ?></h2>
                        <h3 class="reviews__post"><?= $feedback->feedbacks_item_post ?></h3>
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

<section class="checks">
  <div class="container container_center">
    <div class="checks__grid">
      <div class="checks__cell">
        <div class="checks__panel">
          <p>Фотосъемка в интерьере фотозоны	</p>
        </div>
      </div>
      <div class="checks__cell">
        <div class="checks__panel">
          <p>Ретушь профессионального дизайнера	</p>
        </div>
      </div>
      <div class="checks__cell">
        <div class="checks__panel">
          <p>Готовый дизайн проект альбома</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="info">
  <div class="container container_center">
    <div class="info__grid">
      <div class="info__cell">
        <div class="info__logo logo">
          <img src="<?= $config->urls->templates . 'assets/img/logo.png' ?>" alt="" class="logo__img">
        </div>
      </div>
      <div class="info__cell">
        <p>2006-2018 гг.</p>
      </div>
      <div class="info__cell">
        <p>ИП Чернятьев М.Н.</p>
        <p>ОГРНИП 33443434322234</p>
      </div>
      <div class="info__cell">
        <p>Есть вопросы? Звони!</p>
        <p>
          <a href="tel:900060" class="info__link">90-00-60</a>
        </p>
      </div>
    </div>
  </div>
</section>
<section class="done">
  <div class="container container_center">
    <h2 class="done__heading">Что уже сделано</h2>
    <div class="done__wrapper">
      <div class="done__grid">
        <div class="done__cell">
          <div class="done__circle">
            <h3 class="done__number">11213</h3>
          </div>
          <p class="done__text">Детей отснято за время работы проекта фотопоток</p>
        </div>
        <div class="done__cell">
          <div class="done__circle">
            <h3 class="done__number">57</h3>
          </div>
          <p class="done__text">Учебных заведений сотрудничают с нами и число постоянно растет</p>
        </div>
        <div class="done__cell">
          <div class="done__circle">
            <h3 class="done__number">11</h3>
          </div>
          <p class="done__text">Человек состоит в команде проекта "#Фотопоток". Фотографы, ретушеры, полиграфисты и производственники</p>
        </div>
        <div class="done__cell">
          <div class="done__circle">
            <h3 class="done__number">3</h3>
          </div>
          <p class="done__text">Года #Фотопоток работает в Тюмени</p>
        </div>
      </div>
    </div>
  </div>
</section>
