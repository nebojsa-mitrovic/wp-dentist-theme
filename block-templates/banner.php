<?php

/**
 * The Banner Section of frontpage
 *
 * @package wp-dentist-theme
 */

// Logo
$banner = get_field('banner');
$banner_sized = $banner['sizes']['full'];

// Address
$address = get_field('address');

// Email
$email = get_field('email');

// Phone
$phone = get_field('phone');
?>

<banner class=" banner pb-bg-image" style="background-image: url(<?php echo $banner_sized ?>);">
  <h1>Some Text</h1>
</banner>
