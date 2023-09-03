<?php
////////////////////////////////////////////////
//! REQUIRED - Do not edit below
////////////////////////////////////////////////

// Disable WordPress all sitemaps - /wp-sitemap.xml
////////////////////////////////////////////////
add_filter('wp_sitemaps_enabled', '__return_false');

// Defer scripts
////////////////////////////////////////////////
// Add defer attribute to the scripts to set the resource priority to low
function tse_defer_scripts( $tag, $handle, $src ) {
  $defer = array(
    'plugins',
    'custom',
  );
  if ( in_array( $handle, $defer ) ) {
     return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
  }
    return $tag;
}
add_filter( 'script_loader_tag', 'tse_defer_scripts', 10, 3 );


// Wrap oEmbed resource/video inside a div
////////////////////////////////////////////////
function tse_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
}
add_filter('embed_oembed_html', 'tse_embed_oembed_html', 99, 4);


// Add body classes to editor
////////////////////////////////////////////////
function tse_mce_settings($initArray) {
  $initArray['body_class'] = 'post';
  return $initArray;
}
add_filter('tiny_mce_before_init', 'tse_mce_settings');


// Add page slug to body class
////////////////////////////////////////////////
function tse_add_slug_body_class($classes) {
  global $post;
  if (isset($post)) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'tse_add_slug_body_class');


// Prevent WP Editor from removing span
////////////////////////////////////////////////
function tse_no_delete_span($init) {
  // Command separated string of extended elements
  $ext = 'span[id|name|class|style]';

  // Add to extended_valid_elements if it alreay exists
  if (isset($init['extended_valid_elements'])) {
    $init['extended_valid_elements'] .= ',' . $ext;
  } else {
    $init['extended_valid_elements'] = $ext;
  }

  // Super important: return $init!
  return $init;
}
add_filter('tiny_mce_before_init', 'tse_no_delete_span');


// Custom login errors
////////////////////////////////////////////////
function tse_custom_wordpress_errors() {
  return 'Something is wrong!';
}
add_filter('login_errors', 'tse_custom_wordpress_errors');


// Change default excerpt length
////////////////////////////////////////////////
function tse_get_the_excerpt_length() {
  return 150; // Default Length
}
add_filter('excerpt_length', 'tse_get_the_excerpt_length');


// Add ellipsis at the end of excerpt
////////////////////////////////////////////////
function tse_get_the_excerpt_more( $more ) {
  return '... ';
}
add_filter('excerpt_more', 'tse_get_the_excerpt_more');

?>