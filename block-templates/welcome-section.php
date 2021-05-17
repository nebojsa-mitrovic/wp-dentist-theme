<?php

/**
 * The Welcome Section of frontpage
 *
 * @package wp-dentist-theme
 */

//  Dentist photo
$dentist_image = get_field('dentist_image');
$dentist_image_sized = $dentist_image['sizes']['medium'];
$dentist_image_alt = $dentist_image['alt'];
$dentist_image_title = $dentist_image['title'];
$dentist_image_description = $dentist_image['description'];

// Letter
$letter_background = get_field('letter_background');
$letter_background_sized = $letter_background['sizes']['large'];
$welcome_message = get_field('welcome_message');
?>

<section id="willkommen" class="welcome-section pb-center-elements">
  <div class="letter" style="background-image: url(<?php echo $letter_background_sized ?>);">
    <img src="<?php echo $dentist_image_sized ?>" class="dentist-image" alt="<?php echo $dentist_image_alt ?>" title="<?php echo $dentist_image_title ?>" description="<?php echo $dentist_image_description ?>">
    <?php echo $welcome_message ?>
  </div>
</section>
