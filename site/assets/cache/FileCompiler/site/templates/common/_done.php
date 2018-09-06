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
        <div class="form__element form__element_name">
          <label class="form__label" for="name">Имя</label>
          <input name="name" id="name" class="form__input js-input js-name"></input>
        </div>
        <div class="form__element form__element_phone sidebar__element">
          <label class="form__label" for="phone">Телефон</label>
          <input name="phone" id="phone" class="form__input js-input js-phone" type="text" name="phone" value="">
        </div>
        <p class="form__text sidebar__text">Нажимая кнопку отправить, Вы соглашаетесь с <a href="/privacy">политикой обработки персональных данных</a></p>
        <div class="sidebar__button">
          <div class="submit sidebar__submit">
            <span class="submit__label">отправить</span>
            <button class="submit__button"></button>
          </div>
        </div>
      </form>
      <div class="sidebar__contacts">
        <a href="" class="sidebar__contact sidebar__contact_phone">+7897871239</a>
        <a href="" class="sidebar__contact sidebar__contact_phone">+7040942398</a>
        <a href="" class="sidebar__contact ">mail@mail.mail</a>
      </div>
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
$(document).ready(function() {
  $(window).scroll(function(){
    if ($(this).scrollTop()>500) {
      $('#menu').addClass('active');
    }
    else {
      $('#menu').removeClass('active');
    };
  });
});
</script>
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
