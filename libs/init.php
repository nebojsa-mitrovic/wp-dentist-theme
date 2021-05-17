<?php
function theme_setup()
{
  // Initialize theme support
  global $theme_support;
  if (!empty($theme_support)) {
    foreach ($theme_support as $feature => $args) {
      if (count($args) === 0) {
        add_theme_support($feature);
      } else {
        add_theme_support($feature, $args);
      }
    }
  }

  // Register menues
  global $theme_menues;
  if (!empty($theme_menues)) {
    register_nav_menus($theme_menues);
  }

  // Register sidebars
  global $sidebars;
  if (!empty($sidebars)) {
    foreach ($sidebars as $sidebar) {
      register_sidebar($sidebar);
    }
  }

  // Load plugin dependencies
  function register_plugin_dependencies()
  {
    global $plugin_dependencies;
    tgmpa($plugin_dependencies);
  }

  add_action('tgmpa_register', 'register_plugin_dependencies');

  // Clean up wp_head
  // See https://scotch.io/quick-tips/removing-wordpress-header-junk
  remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
  remove_action('wp_head', 'wp_generator'); // remove wordpress version
  remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
  remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
  remove_action('wp_head', 'index_rel_link'); // remove link to index page
  remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
  remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
  remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);


  //make Jquery Migrate script to be silent in the console
  add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
      $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, array('jquery-migrate'));
    }
  });

  add_theme_support('post-thumbnails');
  add_image_size('full');
}

add_action('after_setup_theme', 'theme_setup');
