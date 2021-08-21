<?php

/**
 * The Contact Section of frontpage
 *
 * @package wp-services-theme
 */

$background_image_contact_section = get_field('background_image_contact_section');
$background_image_contact_section_sized = $background_image_contact_section['sizes']['full'];
$contact_data_opening_hours = get_field('contact_data_opening_hours');
$contact_data_phone = get_field('contact_data_phone');
$contact_data_address = get_field('contact_data_address');
$contact_data_google_map = get_field('contact_data_google_map');
$contact_form = get_field('contact_form');
?>

<section id="kontakt" class="contact" style="background-image: url(<?php echo $background_image_contact_section_sized ?>);">
  <div class="container">
    <div class="contact__data">
      <div><?php echo $contact_data_opening_hours ?></div>
      <div class="contact__phone"><a href="tel:<?php echo $contact_data_phone ?>"><?php echo $contact_data_phone ?></a></div>
      <div class="contact__address"><?php echo $contact_data_address ?></div>
      <div><a target="_blank" href="<?php echo $contact_data_google_map ?>"><?php _e('So finden Sie zu uns', 'wp-dentist-theme'); ?>!</a></div>
    </div>
  </div>
</section>
