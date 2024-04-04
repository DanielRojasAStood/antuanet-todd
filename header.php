<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=get_the_title()?></title>

  <!-- meta tag header includes -->
  <meta name="author" content="Taylor Callsen" />
  <meta name="description" content="<?=get_the_excerpt()?>" /> 
  <meta name="keywords" content="<?=$metaTags?>">
  <link rel="canonical" href="<?=wp_get_canonical_url()?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
  <meta name="robots" content="index, follow">

  <!-- compatability header includes -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- open graph header includes -->
  <meta property="og:title" content="<?=get_the_title()?>" />
  <meta property="og:url" content="<?=wp_get_canonical_url()?>" />
  <meta property="og:description" content="<?=get_the_excerpt()?>" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- wordpress header includes -->
  <?php wp_head(); ?>

</head>
<body>

<!-- Header -->
<header class="header" data-header>
  <a href="/" class="header__menu-mobile">
    <img src="" class="header__logo" alt="" id="logo-mobile" />
  </a>
  <nav>
    <ul class="header__menu">
      <li><a class="header__link" href="#wedding">WEDDING</a></li>
      <li><a class="header__link" href="#events">EVENTS</a></li>
      <li>
        <a href="#">
          <img src="" class="header__logo" alt="" id="logo" />
        </a>
      </li>
      <li><a class="header__link" href="#cartagena">CARTAGENA</a></li>
      <li><a class="header__link" href="#rsvp">R.S.V.P.</a></li>
    </ul>
  </nav>
  <button type="button" class="header__button" data-toggle-menu>
    <img class="icon-menu" src="" id="icon-menu" alt="" />
    <img class="icon-close" src="" id="icon-close" alt="" />
  </button>
</header>
<!-- Fin Header -->

<!-- Menu Mobile -->
<section class="menu-mobile" data-menu-mobile>
  <nav>
    <ul>
      <li><a class="header__link" href="#wedding" data-link>WEDDING</a></li>
      <li><a class="header__link" href="#events" data-link>EVENTS</a></li>
      <li>
        <a href="#">
          <img src="" class="header__logo" alt="" id="logo-mobile-menu" />
        </a>
      </li>
      <li><a class="header__link" href="#cartagena" data-link>CARTAGENA</a></li>
      <li><a class="header__link" href="#rsvp" data-link>R.S.V.P.</a></li>
    </ul>
  </nav>
</section>
<!-- Fin Menu Mobile -->

