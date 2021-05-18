<?php

/**
 * The Parallax Section of frontpage
 *
 * @package wp-dentist-theme
 */

$parallax_image = get_field('parallax_image');
$parallax_image_sized = $parallax_image['sizes']['full'];
?>


<section class="parallax" style="background-image: url(<?php echo $parallax_image_sized ?>);">
</section>
