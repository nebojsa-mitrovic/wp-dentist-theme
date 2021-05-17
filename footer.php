<?php
// Columns
$footer_number_of_columns = get_field('footer_number_of_columns', 'options');

// Contact Section
$contact_section_if = get_field('contact_section?', 'options');
$contact_section_headline = get_field('contact_section_headline', 'options');
$contact_section_text = get_field('contact_section_text', 'options');

// Menu Section
$footer_menu_section_if = get_field('footer_menu_section?', 'options');
$footer_menu_section_headline = get_field('footer_menu_section_headline', 'options');

// Menu Legal Section
$footer_legal_menu_section_if = get_field('footer_legal_menu_section?', 'options');
$footer_legal_menu_headline = get_field('footer_legal_menu_headline', 'options');

// About Section
$about_us_section_if = get_field('about_us_section?', 'options');
$about_us_section_headline = get_field('about_us_section_headline', 'options');
$about_us_section_phone = get_field('about_us_section_phone', 'options');
$about_us_section_email = get_field('about_us_section_email', 'options');
$about_us_section_image = get_field('about_us_section_image', 'options');
if ($about_us_section_image) {
  $size = 'medium';
  $about_us_section_image_sized = $about_us_section_image['sizes'][$size];
  $about_us_section_image_alt = $about_us_section_image['alt'];
  $about_us_section_image_title = $about_us_section_image['title'];
  $about_us_section_image_description = $about_us_section_image['description'];
}

// Map Section
$map_if = get_field('map?', 'options');
$map_latitude = get_field('latitude', 'options');
$map_longitude = get_field('longitude', 'options');
$map_name = get_field('name', 'options');
$map_direction_link = get_field('direction_link', 'options');
$map_address = get_field('address', 'options');
?>

<div class="insurance-footer">
  <?php if ($about_us_section_if) : ?>
    <div class="insurance-footer__sub">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 pb-center-elements">
            <?php if ($about_us_section_headline) : ?>
              <h3><?php echo $about_us_section_headline ?></h3>
            <?php endif; ?>
          </div>
          <div class="col-sm-3 pb-center-elements">
            <?php if ($about_us_section_phone) : ?>
              <p><i class="fas fa-phone"></i><a href="tel:<?php echo $about_us_section_phone ?>"><?php echo $about_us_section_phone ?></a></p>
            <?php endif; ?>
          </div>
          <div class="col-sm-3 pb-center-elements">
            <?php if ($about_us_section_email) : ?>
              <p><i class="fas fa-envelope"></i><a href="mailto:<?php echo $about_us_section_email ?>"><?php echo $about_us_section_email ?></a></p>
            <?php endif; ?>
          </div>
          <div class="col-sm-3">
            <?php if ($about_us_section_image_sized) : ?>
              <picture>
                <img src="<?php echo $about_us_section_image_sized ?>" alt="<?php echo $about_us_section_image_alt ?>" title="<?php echo $about_us_section_image_title ?>" description="<?php echo $about_us_section_image_description ?>">
              </picture>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="insurance-footer__main">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <?php if ($contact_section_if) : ?>
              <div class="col-md-6">
                <?php if ($contact_section_headline) : ?>
                  <h4 class="headline-underline"><?php echo $contact_section_headline ?></h4>
                <?php endif; ?>
                <?php if ($contact_section_text) : ?>
                  <?php echo $contact_section_text ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>
            <?php if ($footer_menu_section_if) : ?>
              <div class="col-md-6">
                <?php if ($footer_menu_section_headline) : ?>
                  <h4 class="headline-underline"><?php echo $footer_menu_section_headline ?></h4>
                <?php endif; ?>
                <?php
                wp_nav_menu(array(
                  'theme_location'    => 'footer-nav',
                  'depth'             => 1,
                  'menu_class'        => ''
                ));
                ?>
              </div>
            <?php endif; ?>
            <?php if ($footer_legal_menu_section_if) : ?>
              <div class="col-12">
                <?php if ($footer_legal_menu_headline) : ?>
                  <h4 class="headline-underline"><?php echo $footer_legal_menu_headline ?></h4>
                <?php endif; ?>
                <?php
                wp_nav_menu(array(
                  'theme_location'    => 'footer-legal-nav',
                  'depth'             => 1,
                  'menu_class'        => ''
                ));
                ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <?php if ($map_if) : ?>
          <div class="col-md-6">
            <div id="map-box" class="maps__map-box" style="width:100%;"></div>
            <script>
              setMapbox(47.0695036, 15.4366132, 15);
            </script>
            <script>
              showAllMarkers('<?php echo $map_latitude ?>', '<?php echo $map_longitude ?>', '<?php echo $map_name ?>', '<?php echo $map_direction_link ?>', '<?php echo $map_address ?>');
            </script>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
