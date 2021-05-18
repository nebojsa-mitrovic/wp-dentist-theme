<?php

/**
 * Theme Features
 * See https://codex.wordpress.org/Function_Reference/add_theme_support
 *
 * Example: [
 *  ['post-thumbnails', ['post', 'page']],
 *  ['custom-background']
 * ];
 */
$theme_support = [];

/**
 * Set environment variable dev/prod
 */
global $env;
$env = 'dev';

/**
 * Plugin Dependencies via TGM Plugin Activation
 * See http://tgmpluginactivation.com/configuration/
 *
 * Example: [
 *  [
 *    'name' => 'Plugin Name',
 *    'required' => 'true,'
 *    'source' => get_stylesheet_directory() . '/plugins/plugin.zip'
 *  ]
 * ];
 */
$plugin_dependencies = [];


/**
 * Menues
 * See https://codex.wordpress.org/Navigation_Menus
 */
$theme_menues = [
  'header-nav' => 'Main Navigation',
];


/**
 * Sidebars
 * See https://codex.wordpress.org/Sidebars
 *
 * Example: [
 *  [
 *    'name' => 'Footer Widgets',
 *    'id' => 'footer',
 *    'before_widget' => ''
 *  ]
 * ]
 */
$sidebars = [];


/**
 * Assets
 * Default assets (compiled SASS, jQuery, Foundation, ...) are loaded
 * automatically. `style.css` is NOT loaded since it's only used for WordPress.
 */
$assets = [
  'Main JS' => 'assets/js/index.js',
  'Maps' => 'assets/js/maps.js',
  'Back To Top JS' => 'assets/js/back-to-top.js',
  'Slick Slider JS' => 'assets/js/slick-slider.js',
  'Sticky Slider JS' => 'assets/js/sticky-header.js',
  'Header JS' => 'assets/js/header.js'
];


/**
 * Libraries
 * PHP libraries to load
 */
$libs = [
  'init.php',
  'helper.php',
  'utility.php',
  'assets.php',
  'vendor/class-tgm-plugin-activation.php',
];

// ============================================================================

foreach ($libs as $file) {
  if (locate_template('libs/' . $file)) {
    require_once locate_template('libs/' . $file);
  } else {
    trigger_error('Failed to load library (' . $file . ')', E_USER_ERROR);
  }
}

function upload_svg_files($allowed)
{
  if (!current_user_can('manage_options'))
    return $allowed;
  $allowed['svg'] = 'image/svg+xml';
  return $allowed;
}
add_filter('upload_mimes', 'upload_svg_files');
