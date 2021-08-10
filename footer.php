<?php
// About Section
$footer_about_us_headline = get_field('footer_about_us_headline');
$footer_about_us_phone = get_field('footer_about_us_phone');
$footer_about_us_email = get_field('footer_about_us_email');
$footer_about_us_image = get_field('footer_about_us_image');
if ($footer_about_us_image) {
  $size = 'medium';
  $footer_about_us_image_sized = $footer_about_us_image['sizes'][$size];
  $footer_about_us_image_alt = $footer_about_us_image['alt'];
  $footer_about_us_image_title = $footer_about_us_image['title'];
  $footer_about_us_image_description = $footer_about_us_image['description'];
}

// Footer Section
$footer_address_section_headline = get_field('footer_address_section_headline');
$footer_address_section_text = get_field('footer_address_section_text');
$footer_menu_headline = get_field('footer_menu_headline');
$footer_legal_menu_headline = get_field('footer_legal_menu_headline');
$footer_text_headline = get_field('footer_text_headline');
$footer_text = get_field('footer_text');

?>

<div class="footer">
  <div class="footer__sub">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 center-elements">
          <h3><?php echo $footer_about_us_headline ?></h3>
        </div>
        <div class="col-sm-3 center-elements">
          <p><i class="fas fa-phone"></i><a href="tel:<?php echo $footer_about_us_phone ?>"><?php echo $footer_about_us_phone ?></a></p>
        </div>
        <div class="col-sm-3 center-elements">
          <p><i class="fas fa-envelope"></i><a href="mailto:<?php echo $footer_about_us_email ?>"><?php echo $footer_about_us_email ?></a></p>
        </div>
        <div class="col-sm-3 footer__image">
          <picture>
            <img src="<?php echo $footer_about_us_image_sized ?>" alt="<?php echo $footer_about_us_image_alt ?>" title="<?php echo $footer_about_us_image_title ?>" description="<?php echo $footer_about_us_image_description ?>">
          </picture>
        </div>
      </div>
    </div>
  </div>

  <div class="footer__main">
    <div class="container">
      <div class="row">

        <div class="col-md-3">
          <h4 class="headline-underline"><?php echo $footer_address_section_headline ?></h4>
          <?php echo $footer_address_section_text ?>
        </div>
        <div class="col-md-3">
          <h4 class="headline-underline"><?php echo $footer_menu_headline ?></h4>
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'footer-nav',
            'depth'             => 1,
            'menu_class'        => ''
          ));
          ?>
        </div>
        <div class="col-md-3">
          <h4 class="headline-underline"><?php echo $footer_legal_menu_headline ?></h4>

          <?php
          wp_nav_menu(array(
            'theme_location'    => 'legal-nav',
            'depth'             => 1,
            'menu_class'        => ''
          ));
          ?>
        </div>
        <div class="col-md-3">
          <h4 class="headline-underline"><?php echo $footer_text_headline ?></h4>
          <?php echo $footer_text ?>
        </div>
      </div>
    </div>
  </div>
</div>
