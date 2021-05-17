<?php

/**
 * The template for displaying search results pages.
 *
 * @package wp-dentist-theme
 */

get_header(); ?>

<div class="container search-post">
  <div class="row">
    <div class="col-md-8">

      <div class="row">
        <?php if (have_posts()) : ?>
          <h1 class="page-title"><?php printf(__('Suchen: %s', 'wp-dentist-theme'), '<span>' . get_search_query() . '</span>'); ?></h1>

          <?php while (have_posts()) : the_post();
            $post_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            $title = get_the_title();
            $content = get_the_content();
            $author = get_the_author();
            $date = get_the_time("j F Y");
            $tags = get_the_tags();
          ?>
            <div class="search-post__single">
              <div>
                <h2><a href="<?php echo get_post_permalink(); ?>"><?php echo $title ?></a></h2>
              </div>
              <div>
                <?php _e('Author', 'wp-dentist-theme'); ?>: <?php echo $author ?>
              </div>
              <div>
                <?php _e('Daten', 'wp-dentist-theme'); ?>: <?php echo $date ?>
              </div>
              <div>
                <?php _e('Kategorien', 'wp-dentist-theme'); ?>:
                <?php the_category(', '); ?>
              </div>
              <div>
                <?php _e('Tags', 'wp-dentist-theme'); ?>:
                <?php foreach (get_the_tags($post->ID) as $tag) {
                  echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . ' </a>';
                } ?>
              </div>
              <div>
                <p><?php the_excerpt(); ?></p>
              </div>
            </div>
          <?php endwhile; ?>

          <div class="wp-dentist-theme-pagination">
            <?php echo paginate_links(array('prev_text' => __('&laquo;'), 'next_text' => __('&raquo;'))); ?>
          </div>

        <?php else : ?>
          <h2><?php _e('Leider kein Ergebnis gefunden!', 'wp-dentist-theme'); ?></h2>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-md-4 sidebar-right">
      <?php dynamic_sidebar('archive_sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
