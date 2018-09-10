<?php namespace Processwire; ?>

<?php if ($config->ajax): ?>
  <?= $templateRender; ?>
<?php else: ?>

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
        <a href="" class="sidebar__contact sidebar__contact_phone">90-00-60</a>
        <a href="" class="sidebar__contact ">fotopotok72@yandex.ru</a>
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
          <?php foreach ($pages->get("id=1")->blocks as $item): if (isset($item->anchorForNav) && isset($item->nameForNav) && $item->nameForNav != "" && $item->anchorForNav != ""): ?>
            <li><a href="#<?= $item->anchorForNav ?>" data-uk-smooth-scroll><?= $item->nameForNav ?></a></li>
          <?php endif; endforeach; ?>
      </ul>
    </div>
  </div>
</div>


<script>
    function initMap() {
      var coordinates= {lat: 57.142001, lng: 65.598575},
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


<!— Yandex.Metrika counter —> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter40623600 = new Ya.Metrika({ id:40623600, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/40623600" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!— /Yandex.Metrika counter —>


</body>

</html>
<?php endif; ?>
