<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wp-dentist-theme
 */

// Logo
$logo = get_field('website_logo');
$logo_sized = $logo['sizes']['medium'];
$logo_alt = $logo['alt'];
$logo_title = $logo['title'];
$logo_description = $logo['description'];

// Address
$address = get_field('address');

// Email
$email = get_field('email');

// Phone
$phone = get_field('phone');
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php bloginfo('name');
          echo (' | ');
          bloginfo('description') ?></title>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.css' rel='stylesheet' />
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.0/mapbox-gl.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="website-header">
      <div class="website-info-header website-info-header-top">
        <div class="row website-info-header-top__content">
          <div class="col-md-3 pb-center-elements website-info-header-top__logo">
            <a href="<?php echo get_option("siteurl"); ?>">
              <img src="<?php echo $logo_sized ?>" class="img-responsive" alt="<?php echo $logo_alt ?>" title="<?php echo $logo_title ?>" description="<?php echo $logo_description ?>">
            </a>
          </div>
          <div class="col-md-3 pb-center-elements">
            <p><i class="fas fa-map-marker-alt"></i><?php echo $address ?></p>
          </div>
          <div class="col-md-3 pb-center-elements">
            <p><i class="fas fa-envelope"></i><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
          </div>
          <div class="col-md-3 pb-center-elements">
            <p><i class="fas fa-phone"></i><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
          </div>
        </div>
      </div>

      <div class="website-info-header website-info-header-bottom">
        <div class="website-info-header-bottom__menu">
          <nav class="navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
              <?php
              wp_nav_menu(array(
                'theme_location'    => 'header-nav',
                'depth'             => 1,
                'menu_class'        => 'main-menu'
              ));
              ?>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
