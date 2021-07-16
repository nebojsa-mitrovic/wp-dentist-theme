<?php

/**
 * The Contact Section of pop up
 *
 * @package wp-services-theme
 */

$pop_up_text = get_field('pop_up_text');
?>

<div class="custom-model-main model-open">
  <div class="custom-model-inner">
    <div class="close-btn">×</div>
      <div class="custom-model-wrap">
        <div class="pop-up-content-wrap">
          <?php echo $pop_up_text ?>
        </div>
      </div>
    </div>
  <div class="bg-overlay"></div>
</div>

<script>
$(".close-btn, .bg-overlay").on("click", function () {
  $(".custom-model-main").removeClass('model-open');
});
</script>
