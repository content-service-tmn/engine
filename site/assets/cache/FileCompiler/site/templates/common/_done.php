<?php namespace Processwire; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <?php include_once($config->paths->templates . "common/_head.php"); ?>
</head>

<body>



<?= $templateRender; ?>

<div id="callback" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <a class="uk-offcanvas-close sidebar__close"></a>
    <div class="uk-offcanvas-bar-inner sidebar">
      <a href="" class="sidebar__logo logo">
        <img src="<?= $config->urls->templates . 'assets/img/logo.png' ?>" alt="" class="logo__img">
      </a>
      <form id="callback__form" class="form sidebar__form" action="/" method="post">
        <div class="form__element">
          <label class="form__label" for="more">Имя</label>
          <input name="more" id="more" class="form__input"></input>
        </div>
        <div class="more__element form__submit submit">
          <span class="submit__label">узнать подробнее</span>
          <button class="submit__button"></button>
        </div>
        <div class="form__element form__element_phone">
          <label class="label" for="phone">Телефон</label>
          <input id="phone" class="input js-input js-phone" type="text" name="phone" value="">
        </div>
        <p class="form__text">Нажимая кнопку отправить, Вы соглашаетесь с <a href="/privacy">политикой обработки персональных данных</a></p>
        <div class="form__element form__element_send">
          <div class="send">
            <span class="send__text">отправить</span>
            <button id="submit_form" class="send__button" type="submit" name="submit" value="order"></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="sidebar" class="uk-offcanvas">
  <div class="uk-offcanvas-bar">
    <a class="uk-offcanvas-close sidebar__close"></a>
    <div class="uk-offcanvas-bar-inner sidebar">
      <a href="" class="sidebar__logo logo">
        <img src="<?= $config->urls->templates . 'assets/img/logo.png' ?>" alt="" class="logo__img">
      </a>
      <ul class="sidebar__items">
        <li><a href="#main" data-uk-smooth-scroll>главная</a></li>
        <li><a href="#about" data-uk-smooth-scroll>о нас</a></li>
        <li><a href="#salary" data-uk-smooth-scroll>твой доход</a></li>
        <li><a href="#team" data-uk-smooth-scroll>команда</a></li>
        <li><a href="#travel" data-uk-smooth-scroll>путешествия</a></li>
        <li><a href="#benefits" data-uk-smooth-scroll>преимущества</a></li>
      </ul>
    </div>
  </div>
</div>

<script>
    function initMap() {
      var coordinates= {lat: 57.169883, lng: 65.5453884},
          options = {
            zoom: 15,
            disableDefaultUI: true,
            center: coordinates,
            draggable: !("ontouchend" in document)
          };
      var map = new google.maps.Map(document.getElementById('google-map'), options);
      $.getJSON('<?= $config->urls->templates . 'assets/json/google-map.json' ?>',function(data){
        map.setOptions({styles:data});
      });
      new google.maps.Marker({map:map,position:coordinates});
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz-fa3z3jDQhfL6rwyNt3DEJ3XHbyoUHk&callback=initMap" async defer></script>

</body>

</html>
