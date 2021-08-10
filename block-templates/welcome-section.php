<?php

/**
 * The Welcome Section of frontpage
 *
 * @package wp-dentist-theme
 */

//  Dentist photo
$welcome_image = get_field('welcome_image');
$welcome_image_sized = $welcome_image['sizes']['medium'];
$welcome_image_alt = $welcome_image['alt'];
$welcome_image_title = $welcome_image['title'];
$welcome_image_description = $welcome_image['description'];

// Letter
$letter_background = get_field('letter_background');
$letter_background_sized = $letter_background['sizes']['large'];
$welcome_message = get_field('welcome_message');
?>

<section id="willkommen" class="welcome-section center-elements">
  <div class="letter" style="background-image: url(<?php echo $letter_background_sized ?>);">
    <img src="<?php echo $welcome_image_sized ?>" class="dentist-image" alt="<?php echo $welcome_image_alt ?>" title="<?php echo $welcome_image_title ?>" description="<?php echo $welcome_image_description ?>">
    <div class="letter__text">
      <?php echo $welcome_message ?>
    </div>
  </div>
</section>
