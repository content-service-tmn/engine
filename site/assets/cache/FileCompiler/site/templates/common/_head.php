<meta charset="utf-8">
<title><?= $page->seo_title ? $page->seo_title : $page->title; ?></title>
<meta name="description" content="description">
<meta name="author" content="Vasiliy">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href= <?= $config->urls->templates . "assets/css/template.css"?>>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,200i,300,400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
<script
src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
crossorigin="anonymous"></script>
<?php // generate css / js
   $js = AIOM::JS(array(
    "assets/uikit/js/core/core.js",
    "assets/uikit/js/core/utility.js",
    "assets/uikit/js/components/slideset.js",
    "assets/uikit/js/components/slideshow.js",
    "assets/uikit/js/components/dotnav.custom.js",
    // "assets/uikit/js/core/smooth-scroll.js",
  //   "assets/uikit/js/core/modal.js",
  //   "assets/uikit/js/components/accordion.js",
  //   "assets/uikit/js/components/slideshow.js",
  //   "assets/uikit/js/components/lightbox.js",
  //   "assets/uikit/js/components/notify.js",
     "assets/js/template.js"
   ));
?>
<script src="<?= $js; ?>"></script>
