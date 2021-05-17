<?php
//Add Shortcode
function breadcrumbs()
{

  // Code
  if (!is_home()) {
    echo '<nav class="breadcrumb">';
    echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a><span class="divider">/</span>';
    if (is_category() || is_single()) {
      the_category(' <span class="divider">/</span> ');
      if (is_single()) {
        echo ' <span class="divider">/</span> ';
        the_title();
      }
    } elseif (is_page()) {
      echo the_title();
    }
    echo '</nav>';
  }
}
add_shortcode('breadcrumbs', 'breadcrumbs');


/*
*
* Comments inside single-post section
*
*/


//Removing Website field from Post Comment
function page_builder_remove_website($fields)
{
  unset($fields['url']);
  return $fields;
}
add_filter('comment_form_fields', 'page_builder_remove_website');


//Create your own Post Comment
function page_builder_comments_bottom($fields)
{
  $comment_field = $fields['comment'];
  unset($fields['comment']);
  $fields['comment'] = $comment_field;
  return $fields;
}
add_filter('comment_form_fields', 'page_builder_comments_bottom');

//HTML for Name and Email fields
function page_builder_name_email($fields)
{
  $fields['author'] =
    '<div class="single-blog-post__comment-section__comment-post--name"
      <label for="author">' . __('Name *', 'wp-dentist-theme') . '</label>
      <p>
        <input id="author"  placeholder="' . __('Schreiben deine Name', 'wp-dentist-theme') . '" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="70%"' . $aria_req . ' /></p>
    </div>';

  $fields['email'] =
    '<div class="single-blog-post__comment-section__comment-post--email"
      <label for="email">' . __('Email *', 'wp-dentist-theme') . '</label>
      <p><input id="email" placeholder="' . __('Schreiben dein Email', 'wp-dentist-theme') . '" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="70%"' . $aria_req . ' /></p>
    </div>';

  return $fields;
}
add_filter('comment_form_fields', 'page_builder_name_email');

//HTML for Comment field
function page_builder_comment($args)
{
  $args['comment_field'] =
    '<div class="single-blog-post__comment-section__comment-post--comments">
      <label for="comment">'  . __('Komment *', 'wp-dentist-theme') .  '</label>
      <textarea placeholder="' . __('Schreiben dein Komment', 'wp-dentist-theme') . '" id="comment" name="comment" aria-required="true" size="45" rows="8"></textarea>
    </div>';

  $args['class_submit']  = 'btn-basic btn-comment';

  return $args;
}
add_filter('comment_form_defaults', 'page_builder_comment');



/*
*
* Archive blogs
*
*/


//Read more function in Excrept
function new_excerpt_more($more)
{
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function the_excerpt_more_link($excerpt)
{
  $post = get_post();
  $excerpt .= '<a class="post-see-more" href="' . get_permalink($post->ID) . '">' . __('Mehr sehen', 'wp-dentist-theme') . ' <i class="fas fa-arrow-right" aria-hidden="true"></i></a>';
  return $excerpt;
}
add_filter('the_excerpt', 'the_excerpt_more_link');
