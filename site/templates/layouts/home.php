<?php namespace Processwire; ?>
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
<?php foreach ($page->blocks as $block): ?>
    <?php if ($block->repeater_matrix_type == 1): ?>
    <section id="header" class="header">
      <div class="header__grid">
        <div class="header__menu menu">
          <div class="container container_center">
            <div class="menu__grid">
              <a href="" class="menu__logo"></a>
              <ul class="menu__nav">
                  <?php foreach ($page->blocks as $item): if (isset($item->anchorForNav) && isset($item->nameForNav) && $item->nameForNav!= "" && $item->anchorForNav != ""):  ?>
                    <li class="menu__item"><a href="#<?=$item->anchorForNav?>" class="menu__link"><?=$item->nameForNav?></a></li>
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
                      <div class="benefits-block__img"></div>
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
                    <div class="prices-block__img"></div>
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
<?php endforeach; ?>

