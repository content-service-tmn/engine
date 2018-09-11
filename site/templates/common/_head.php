<meta charset="utf-8">
<title><?= $page->seo_title ? $page->seo_title : $page->title; ?></title>
<meta name="description" content="description">
<meta name="author" content="Vasiliy">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:200,200i,300,400,400i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet"> -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<?php // generate css / js
   $js = AIOM::JS(array(
    "assets/uikit/js/core/core.js",
    "assets/uikit/js/core/utility.js",
    "assets/uikit/js/components/slideset.js",
    "assets/uikit/js/components/slideshow.js",
    "assets/uikit/js/core/smooth-scroll.js",
    "assets/uikit/js/core/modal.js",
    "assets/uikit/js/core/scrollspy.js",
    "assets/uikit/js/components/lightbox.js",
    "assets/uikit/js/core/offcanvas.js",
    "assets/uikit/js/components/notify.js",
     "assets/js/template.js"
   ));
   $css = AIOM::CSS(array(
        "assets/css/template.css"
   ));
?>
<script src="<?= $js; ?>"></script>
<link rel="stylesheet" type="text/css" href=<?= $css ?> >
