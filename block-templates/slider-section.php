<?php

/**
 * The Slider Section of frontpage
 *
 * @package wp-dentist-theme
 */

//  Slider 1
$slider_image_1 = get_field('slider_image_1');
$slider_image_1_sized = $slider_image_1['sizes']['full'];
$slider_image_1_alt = $slider_image_1['alt'];
$slider_image_1_title = $slider_image_1['title'];
$slider_image_1_description = $slider_image_1['description'];

//  Slider 2
$slider_image_2 = get_field('slider_image_2');
$slider_image_2_sized = $slider_image_2['sizes']['full'];
$slider_image_2_alt = $slider_image_2['alt'];
$slider_image_2_title = $slider_image_2['title'];
$slider_image_2_description = $slider_image_2['description'];

//  Slider 3
$slider_image_3 = get_field('slider_image_3');
$slider_image_3_sized = $slider_image_3['sizes']['full'];
$slider_image_3_alt = $slider_image_3['alt'];
$slider_image_3_title = $slider_image_3['title'];
$slider_image_3_description = $slider_image_3['description'];

//  Slider 4
$slider_image_4 = get_field('slider_image_4');
$slider_image_4_sized = $slider_image_4['sizes']['full'];
$slider_image_4_alt = $slider_image_4['alt'];
$slider_image_4_title = $slider_image_4['title'];
$slider_image_4_description = $slider_image_4['description'];

//  Slider 5
$slider_image_5 = get_field('slider_image_5');
$slider_image_5_sized = $slider_image_5['sizes']['full'];
$slider_image_5_alt = $slider_image_5['alt'];
$slider_image_5_title = $slider_image_5['title'];
$slider_image_5_description = $slider_image_5['description'];
?>

<section id="bilder">
  <div class="slider">

    <div class="slider-image" style="background-image: url(<?php echo $slider_image_1_sized ?>);"></div>
    <div class="slider-image" style="background-image: url(<?php echo $slider_image_2_sized ?>);"></div>
    <div class="slider-image" style="background-image: url(<?php echo $slider_image_3_sized ?>);"></div>
    <div class="slider-image" style="background-image: url(<?php echo $slider_image_4_sized ?>);"></div>
    <div class="slider-image" style="background-image: url(<?php echo $slider_image_5_sized ?>);"></div>

  </div>
</section>
