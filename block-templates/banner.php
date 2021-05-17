<?php

/**
 * The Banner Section of frontpage
 *
 * @package wp-dentist-theme
 */

$banner = get_field('banner');
$banner_sized = $banner['sizes']['full'];
$banner_text = get_field('banner_text');
?>

<banner class="banner pb-bg-image" style="background-image: url(<?php echo $banner_sized ?>);">
  <h1><?php echo $banner_text ?></h1>
</banner>
