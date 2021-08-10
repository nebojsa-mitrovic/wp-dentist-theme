<?php

/**
 * The About Us Section of frontpage
 *
 * @package wp-dentist-theme
 */

// Our Team
$about_us_headline = get_field('about_us_headline');
$dentist_name = get_field('dentist_name');
$dentist_text = get_field('dentist_text');
$dentist_image = get_field('dentist_image');
$dentist_image_sized = $dentist_image['sizes']['medium'];
$dentist_image_alt = $dentist_image['alt'];
$dentist_image_title = $dentist_image['title'];
$dentist_image_description = $dentist_image['description'];

$assistent_name = get_field('assistent_name');
$assistent_text = get_field('assistent_text');
$assistent_image = get_field('assistent_image');
$assistent_image_sized = $assistent_image['sizes']['medium'];
$assistent_image_alt = $assistent_image['alt'];
$assistent_image_title = $assistent_image['title'];
$assistent_image_description = $assistent_image['description'];

$second_assistent_name = get_field('second_assistent_name');
$second_assistent_text = get_field('second_assistent_text');
$second_assistent_image = get_field('second_assistent_image');
$second_assistent_image_sized = $second_assistent_image['sizes']['medium'];
$second_assistent_image_alt = $second_assistent_image['alt'];
$second_assistent_image_title = $second_assistent_image['title'];
$second_assistent_image_description = $second_assistent_image['description'];

// Sayings
$saying_1_icon = get_field('saying_1_icon');
$saying_1_text = get_field('saying_1_text');
$saying_2_icon = get_field('saying_2_icon');
$saying_2_text = get_field('saying_2_text');
$saying_3_icon = get_field('saying_3_icon');
$saying_3_text = get_field('saying_3_text');
$saying_4_icon = get_field('saying_4_icon');
$saying_4_text = get_field('saying_4_text');
$saying_5_icon = get_field('saying_5_icon');
$saying_5_text = get_field('saying_5_text');
$saying_6_icon = get_field('saying_6_icon');
$saying_6_text = get_field('saying_6_text');

?>

<section id="ueber-uns" class="container about-us">
  <div class="row">
    <div class="col-md-7">
      <h2 class="headline-underline"><?php echo $about_us_headline ?></h2>

      <div class="row about-us__dentist">
        <div class="col-md-7">
          <h3><?php echo $dentist_name ?></h3>
          <?php echo $dentist_text ?>
        </div>
        <div class="col-md-4 pl-0">
          <img src="<?php echo $dentist_image_sized ?>" class="about-us-image" alt="<?php echo $dentist_image_alt ?>" title="<?php echo $dentist_image_title ?>" description="<?php echo $dentist_image_description ?>">
        </div>
      </div>

      <div class="row about-us__dentist">
        <div class="col-md-7">
          <h3><?php echo $assistent_name ?></h3>
          <?php echo $assistent_text ?>
        </div>
        <div class="col-md-4 pl-0">
          <img src="<?php echo $assistent_image_sized ?>" class="about-us-image" alt="<?php echo $assistent_image_alt ?>" title="<?php echo $assistent_image_title ?>" description="<?php echo $assistent_image_description ?>">
        </div>
      </div>

      <div class="row about-us__dentist">
        <div class="col-md-7">
          <h3><?php echo $second_assistent_name ?></h3>
          <?php echo $second_assistent_text ?>
        </div>
        <div class="col-md-4 pl-0">
          <img src="<?php echo $second_assistent_image_sized ?>" class="about-us-image" alt="<?php echo $second_assistent_image_alt ?>" title="<?php echo $second_assistent_image_title ?>" description="<?php echo $second_assistent_image_description ?>">
        </div>
      </div>
    </div>

    <div class="col-md-5 center-elements about-us__sayings">
      <div>
        <i class="<?php echo $saying_1_icon ?>"></i>
        <p><?php echo $saying_1_text ?></p>
      </div>

      <div>
        <i class="<?php echo $saying_2_icon ?>"></i>
        <p><?php echo $saying_2_text ?></p>
      </div>

      <div>
        <i class="<?php echo $saying_3_icon ?>"></i>
        <p><?php echo $saying_3_text ?></p>
      </div>

      <div>
        <i class="<?php echo $saying_4_icon ?>"></i>
        <p><?php echo $saying_4_text ?></p>
      </div>

      <div>
        <i class="<?php echo $saying_5_icon ?>"></i>
        <p><?php echo $saying_5_text ?></p>
      </div>

      <div>
        <i class="<?php echo $saying_6_icon ?>"></i>
        <p><?php echo $saying_6_text ?></p>
      </div>
    </div>
  </div>
</section>
