
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="handheldFriendly" content="true">
  <meta name="description" content="Bantu & Bantu">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Stylesheets -->
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">
    <header role="banner">
      <div class="container">
        <nav role="navigation" style="padding:15px;">
          <div class="logo">
            <a class="nav__icon" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('/img/bantu.png'); ?>" alt="Header Logo"></a>
          </div>
          <label for="checkbox--nav" class="js-icon--navigation icon--navigation">
            <span class="icon--navigation__line"></span>
            <span class="icon--navigation__line"></span>
            <span class="icon--navigation__line"></span>
          </label>
          <input id="checkbox--nav" class="js-checkbox--nav checkbox--nav" type="checkbox" name="checkbox--nav">
          <?php
          echo wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation',
            'container' => '',
            'menu_class' => 'js-nav__links nav__links nav__links--hidden'
          ));

          ?>
          
          <!-- <ul class="js-nav__links nav__links nav__links--hidden">
            <li><a class="" href="<?php //echo site_url(); ?>">Home</a></li>
            <li class="hvr-reveal"><a href="<?php //echo site_url('/about-us'); ?>">About us</a></li>
            <li class="hvr-reveal"><a href="<?php //echo site_url('/attorneys'); ?>">Attorneys</a></li>
            <li class="hvr-reveal"><a href="<?php //echo site_url('/practice-areas'); ?>">Practices</a></li>
            <li class="hvr-reveal"><a href="<?php //echo site_url('/contact-us'); ?>">Contact us</a></li>
          </ul> -->
        </nav>
      </div>
    </header>