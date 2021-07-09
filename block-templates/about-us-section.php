<?php

/**
 * The About Us Section of frontpage
 *
 * @package wp-dentist-theme
 */

//  Our Team
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

//  Promises
$promises_headline = get_field('promises_headline');
$promises_icon_clock_headline = get_field('promises_icon_clock_headline');
$promises_icon_clock_text = get_field('promises_icon_clock_text');
$promises_icon_music_headline = get_field('promises_icon_music_headline');
$promises_icon_music_text = get_field('promises_icon_music_text');
$promises_icon_tooth_headline = get_field('promises_icon_tooth_headline');
$promises_icon_tooth_text = get_field('promises_icon_tooth_text');
$promises_icon_thumb_up_headline = get_field('promises_icon_thumb_up_headline');
$promises_icon_thumb_up_text = get_field('promises_icon_thumb_up_text');
?>

<section id="ueber-uns" class="container about-us">
  <div class="row">
    <div class="col-md-6">
      <h2 class="headline-underline"><?php echo $about_us_headline ?></h2>

      <div class="row about-us__dentist">
        <div class="col-md-7">
          <h3><?php echo $dentist_name ?></h3>
          <?php echo $dentist_text ?>
        </div>
        <div class="col-md-4">
          <img src="<?php echo $dentist_image_sized ?>" class="about-us-image" alt="<?php echo $dentist_image_alt ?>" title="<?php echo $dentist_image_title ?>" description="<?php echo $dentist_image_description ?>">
        </div>
      </div>

      <div class="row about-us__dentist">
        <div class="col-md-7">
          <h3><?php echo $assistent_name ?></h3>
          <?php echo $assistent_text ?>
        </div>
        <div class="col-md-4">
          <img src="<?php echo $assistent_image_sized ?>" class="about-us-image" alt="<?php echo $assistent_image_alt ?>" title="<?php echo $assistent_image_title ?>" description="<?php echo $assistent_image_description ?>">
        </div>
      </div>

      <div class="row about-us__dentist">
        <div class="col-md-7">
          <h3><?php echo $second_assistent_name ?></h3>
          <?php echo $second_assistent_text ?>
        </div>
        <div class="col-md-4">
          <img src="<?php echo $second_assistent_image_sized ?>" class="about-us-image" alt="<?php echo $second_assistent_image_alt ?>" title="<?php echo $second_assistent_image_title ?>" description="<?php echo $second_assistent_image_description ?>">
        </div>
      </div>
    </div>

    <div class="col-md-6 about-us__promises">
      <h3><?php echo $promises_headline ?></h3>


      <div class="about-us__icons">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#da166e">
              <path d="M86,18.14063c-37.35625,0 -67.85937,30.50313 -67.85937,67.85938c0,37.35625 30.50313,67.85938 67.85938,67.85938c37.35625,0 67.85938,-30.50312 67.85938,-67.85937c0,-37.35625 -30.50312,-67.85937 -67.85937,-67.85937zM86,26.20313c32.92188,0 59.79688,26.875 59.79688,59.79688c0,32.92188 -26.875,59.79688 -59.79687,59.79688c-32.92187,0 -59.79687,-26.875 -59.79687,-59.79687c0,-32.92187 26.875,-59.79687 59.79688,-59.79687zM86,41.65625c-2.28437,0 -4.03125,1.74687 -4.03125,4.03125v33.32605c-2.41875,1.34375 -4.03125,4.0302 -4.03125,6.98645c0,4.43438 3.62812,8.0625 8.0625,8.0625c2.95625,0 5.6427,-1.6125 6.98645,-4.03125h19.88855c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-19.88855c-0.67187,-1.20937 -1.74583,-2.28333 -2.9552,-2.9552v-33.32605c0,-2.28438 -1.74688,-4.03125 -4.03125,-4.03125zM79.28125,115.5625c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74688,4.03125 4.03125,4.03125h13.4375c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125z"></path>
            </g>
          </g>
        </svg>
        <h3><?php echo $promises_icon_clock_headline ?></h3>
        <p><?php echo $promises_icon_clock_text ?></p>
      </div>

      <div class="about-us__icons">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;">
          <g transform="">
            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <path d="" fill="none"></path>
              <g fill="#da166e">
                <path d="M92.88,27.52c9.39808,0 12.4872,1.84728 16.39848,4.18648c4.99144,2.98592 10.65024,6.37088 24.88152,6.39152v16.942c-11.28664,0 -14.95712,-2.30136 -18.84432,-4.74032c-4.17272,-2.6144 -8.90272,-5.57968 -18.99568,-5.57968c-1.12488,0 -2.30136,0.1376 -3.44,0.50224v-17.70224M86,115.6184v8.2216c0,13.072 -2.85176,20.64 -17.42016,20.64c-20.41984,0 -20.41984,-7.95328 -20.41984,-13.76c0,-4.59928 0,-10.32 20.64,-10.32c8.13216,0 13.57768,-1.94704 17.2,-4.7816M92.88,20.64c-5.504,0 -6.88,3.44 -6.88,6.88v72.24c0,7.61616 -3.55352,13.76 -17.2,13.76c-19.47384,0 -27.52,5.03616 -27.52,17.2c0,8.19752 1.68216,20.64 27.29984,20.64c23.80136,0 24.30016,-18.29392 24.30016,-27.52c0,-3.53288 0,-13.42632 0,-24.08v-41.28c0.0172,-4.6612 0.688,-6.88 3.44,-6.88c17.67472,0 13.31624,10.32 37.84,10.32c0,0 6.88,0 6.88,-5.84456c0,-8.7892 0,-15.00872 0,-18.34552c0,-5.27352 -2.36672,-6.51192 -6.74928,-6.51192c-24.46872,0.00344 -18.45216,-10.578 -41.41072,-10.578z"></path>
              </g>
            </g>
          </g>
        </svg>
        <h3><?php echo $promises_icon_music_headline ?></h3>
        <p><?php echo $promises_icon_music_text ?></p>
      </div>

      <div class="about-us__icons">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#da166e;">
          <g transform="">
            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <path d="" fill="none"></path>
              <path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path>
              <path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path>
              <path d="M0,172v-172h172v172z" fill="none"></path>
              <path d="M3.44,168.56v-165.12h165.12v165.12z" fill="none"></path>
              <path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"></path>
              <path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"></path>
              <path d="" fill="none"></path>
              <g fill="#da166e">
                <path d="M66.9389,6.87328c-0.216,-0.00461 -0.43195,0.01114 -0.645,0.04703c-15.74693,0.21929 -28.87213,5.23432 -38.04156,14.04219c-9.37713,9.00737 -14.49234,21.84452 -14.49234,36.6575c0,10.92813 4.04393,19.44279 8.50594,27.41922c4.46201,7.97643 9.32683,15.54727 11.98625,25.20875v-0.02015c3.07268,11.43447 5.25076,24.52126 8.62688,35.07859c1.68806,5.27867 3.65111,9.95878 6.48359,13.59203c2.83249,3.6334 6.90586,6.22156 11.7175,6.22156c4.7024,0 9.02819,-1.77029 11.8586,-5.18687c2.8304,-3.41659 4.1186,-8.12552 4.1186,-13.70625c0,-13.71153 2.7717,-31.87682 5.57656,-47.56203c0.4743,-2.25318 1.90673,-2.92266 3.48031,-2.92266c1.57801,0 2.86104,0.56749 3.23172,2.80172l0.00672,0.02688v0.02687c2.80597,15.37121 5.59,33.89511 5.59,47.62922c0,5.5792 1.28846,10.28941 4.1186,13.70625c2.82998,3.41692 7.15569,5.18687 11.8586,5.18687c4.82396,0 8.89585,-2.61825 11.72422,-6.27531c2.82837,-3.65706 4.78973,-8.36289 6.47687,-13.65922c3.37306,-10.58882 5.55987,-23.67524 8.62688,-34.9375c2.65943,-9.66153 7.52427,-17.23194 11.98625,-25.20875c4.46002,-7.9733 8.50238,-16.48616 8.50594,-27.40578c0.15693,-14.80982 -4.88033,-27.65556 -14.21687,-36.66422c-9.34237,-9.01427 -22.83753,-14.08922 -39.06281,-14.08922c-7.04877,0 -13.27259,0.94946 -18.80578,2.75469c-5.5332,-1.80522 -11.75701,-2.75469 -18.80578,-2.75469c-0.04123,0 -0.07974,0.00665 -0.12094,0.00672c-0.09607,-0.00853 -0.19246,-0.01301 -0.28891,-0.01344zM104.96031,13.76c14.80352,0 26.38858,4.54108 34.28578,12.16094c7.89719,7.61985 12.25999,18.41673 12.1139,31.65875v0.02016v0.02015c0,9.25249 -3.31904,16.34854 -7.6325,24.05985c-4.31346,7.7113 -9.63565,15.90663 -12.61781,26.74062v0.00672c-3.20236,11.75546 -5.40963,24.84328 -8.53953,34.66875c-1.56495,4.91273 -3.38764,8.97514 -5.36828,11.5361c-1.98064,2.56051 -3.74096,3.60797 -6.28203,3.60797c-3.13341,0 -5.07732,-0.90719 -6.5575,-2.69422c-1.48018,-1.78702 -2.53969,-4.80858 -2.53969,-9.31891c0,-14.63007 -2.85815,-33.28795 -5.69078,-48.81172c-0.88492,-5.33376 -5.56276,-8.55297 -10.01765,-8.55297c-4.45489,0 -9.12078,3.11911 -10.21922,8.4186l-0.01344,0.04703l-0.00672,0.04703c-2.83202,15.8282 -5.6975,34.20615 -5.6975,48.85203c0,4.51223 -1.05977,7.5325 -2.53969,9.31891c-1.47977,1.78643 -3.42358,2.69422 -6.5575,2.69422c-2.55339,0 -4.31894,-1.03907 -6.29547,-3.57437c-1.97653,-2.53531 -3.79081,-6.56463 -5.35484,-11.45547c-3.12807,-9.78167 -5.33437,-22.86704 -8.53281,-34.76953l-0.00672,-0.00672v-0.01344c-2.98202,-10.8339 -8.30438,-19.0298 -12.61781,-26.74062c-4.31343,-7.71083 -7.6325,-14.8055 -7.6325,-24.05985c0,-13.25054 4.44282,-24.06559 12.38266,-31.69234c7.86948,-7.55917 19.32738,-12.07457 33.94313,-12.15422c12.1989,0.92239 22.84692,6.45175 30.37547,15.19109c0.79389,0.95884 2.04383,1.41402 3.26839,1.19024c1.22457,-0.22379 2.23272,-1.09163 2.63617,-2.26928c0.40345,-1.17765 0.13927,-2.48139 -0.69081,-3.40908c-3.12209,-3.62421 -6.74218,-6.7524 -10.72313,-9.3525c3.87147,-0.8838 8.22699,-1.36391 13.12844,-1.36391z"></path>
              </g>
            </g>
          </g>
        </svg>
        <h3><?php echo $promises_icon_tooth_headline ?></h3>
        <p><?php echo $promises_icon_tooth_text ?></p>
      </div>

      <div class="about-us__icons">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 172 172" style=" fill:#000000;">
          <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <path d="M0,172v-172h172v172z" fill="none"></path>
            <g fill="#da166e">
              <path d="M82.56,13.76c-4.04469,0 -7.94156,2.49938 -10.535,6.5575c-0.09406,0.13438 -0.24187,0.18813 -0.3225,0.3225l-38.3775,52.675c-3.84312,5.38844 -5.805,11.65031 -5.805,18.1675v32.3575c0,17.01188 13.94813,30.96 30.96,30.96h65.36c5.21375,0 9.52719,-2.10969 12.47,-4.945c2.94281,-2.83531 4.73,-6.32906 4.73,-9.89c0,-2.94281 -0.68531,-5.36156 -1.3975,-7.2025c3.34594,-1.80062 8.2775,-5.21375 8.2775,-13.0075c0,-4.90469 -2.37844,-8.11625 -4.73,-10.2125c2.35156,-2.31125 4.73,-5.71094 4.73,-10.8575c0,-7.71312 -4.89125,-10.87094 -7.74,-12.3625c0.29563,-1.77375 0.86,-4.38062 0.86,-7.525c0,-6.73219 -6.35594,-13.06125 -15.695,-13.115c-0.02687,0 -0.08062,0 -0.1075,0c-10.68281,-0.30906 -36.48281,-0.3225 -42.8925,-0.3225c1.14219,-2.56656 1.97531,-4.35375 4.085,-9.1375c3.21156,-7.28312 6.58438,-14.91562 7.6325,-17.845c0,-0.01344 0,-0.09406 0,-0.1075c0.92719,-2.45906 2.2575,-4.89125 2.2575,-8.7075c0,-5.30781 -2.06937,-9.44656 -4.8375,-12.04c-2.76812,-2.59344 -5.99312,-3.7625 -8.9225,-3.7625zM82.56,20.64c0.84656,0 2.74125,0.57781 4.1925,1.935c1.45125,1.35719 2.6875,3.35938 2.6875,6.9875c0,2.33813 -0.69875,3.31906 -1.8275,6.3425c0,0.04031 0,0.06719 0,0.1075c-0.68531,1.92156 -4.1925,10.11844 -7.4175,17.415c-3.225,7.29656 -6.235,13.975 -6.235,13.975c-0.47031,1.06156 -0.37625,2.28438 0.25531,3.26531c0.63156,0.9675 1.70656,1.55875 2.86219,1.57219c0,0 36.56344,-0.01344 48.0525,0.3225c0.04031,0 0.06719,0 0.1075,0c6.40969,0 8.9225,4.05813 8.9225,6.235c0,2.75469 -0.9675,8.7075 -0.9675,8.7075c-0.25531,1.63938 0.69875,3.21156 2.2575,3.7625c0,0 5.59,1.80063 5.59,7.4175c0,5.03906 -5.0525,8.0625 -5.0525,8.0625c-1.1825,0.63156 -1.89469,1.88125 -1.8275,3.225c0.06719,1.33031 0.90031,2.51281 2.15,3.01c0,0 4.73,1.73344 4.73,6.7725c0,5.67063 -7.095,8.385 -7.095,8.385c-1.02125,0.36281 -1.81406,1.19594 -2.12312,2.23063c-0.3225,1.03469 -0.13438,2.16344 0.51062,3.03687c0,0 1.8275,2.4725 1.8275,6.5575c0,0.91375 -0.79281,3.225 -2.58,4.945c-1.78719,1.72 -4.35375,3.01 -7.74,3.01h-65.36c-13.26281,0 -24.08,-10.81719 -24.08,-24.08v-32.3575c0,-5.14656 1.51844,-9.84969 4.515,-14.0825c0.01344,-0.02687 -0.01344,-0.08062 0,-0.1075l38.485,-52.89c0.08063,-0.1075 0.14781,-0.215 0.215,-0.3225c1.54531,-2.56656 3.62813,-3.44 4.945,-3.44z"></path>
            </g>
          </g>
        </svg>
        <h3><?php echo $promises_icon_thumb_up_headline ?></h3>
        <p><?php echo $promises_icon_thumb_up_text ?></p>
      </div>
    </div>
  </div>
</section>
