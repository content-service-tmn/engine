<?php namespace Processwire; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <?php include_once($config->paths->templates . "common/_head.php"); ?>
</head>

<body>



<?= $templateRender; ?>

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
