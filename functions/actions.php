<?php

/* ===========================================
=            Enqueue javascripts            =
=========================================== */
function tse_enqueue_scripts() {
  /* Load google fonts */
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,500;9..40,600&family=Oswald&family=Poppins:wght@200;300;400;500&display=swap', 'all');

  /* Do not load in backend */
  if (is_admin()) return;

  /* wp_enqueue_script( 'identifier', 'url', 'dependency', version', '' ); */
  
 // wp_enqueue_style('bootstrapTheme.css', get_template_directory_uri() . '/css/bootstrapTheme.css');
  wp_enqueue_style('bootstrap-icons.css', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
  wp_enqueue_style('bootstrap.min.css', '//cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
  
  wp_enqueue_style('owl.carousel.css', get_template_directory_uri() . '/css/owl.carousel.css');  
  wp_enqueue_style('owl.theme.css', get_template_directory_uri() . '/css/owl.theme.css');  
  wp_enqueue_style('kpl-style', get_stylesheet_uri(), array(), '1.0');
  wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0', true);
  
  wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery', 'plugins'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'tse_enqueue_scripts');



// Disable all WordPress generated image sizes
////////////////////////////////////////////////
function tse_disable_image_sizes($sizes) {

	unset($sizes['thumbnail']);    // disable thumbnail size
	unset($sizes['medium']);       // disable medium size
	unset($sizes['large']);        // disable large size
	unset($sizes['medium_large']); // disable medium-large size
	unset($sizes['1536x1536']);    // disable 2x medium-large size
	unset($sizes['2048x2048']);    // disable 2x large size

	return $sizes;

}
add_action('intermediate_image_sizes_advanced', 'tse_disable_image_sizes');

// disable scaled image size
add_filter('big_image_size_threshold', '__return_false');

// disable other image sizes
function tse_disable_other_image_sizes() {

	remove_image_size('post-thumbnail'); // disable images added via set_post_thumbnail_size()
	// remove_image_size('another-size');   // disable any other added image sizes

}
add_action('init', 'tse_disable_other_image_sizes');


/*=============================================
=            Remove junk from head            =
=============================================*/
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );


/*====================================
=            Remove Emoji            =
====================================*/
function tse_disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
  add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'tse_disable_emojis' );


/*=======================================================
=            Remove the tinymce emoji plugin            =
=======================================================*/
function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

/*============================================================================
=            Remove emoji CDN hostname from DNS prefetching hints            =
============================================================================*/
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
if ( 'dns-prefetch' == $relation_type ) {
  /** This filter is documented in wp-includes/formatting.php */
  $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

  $urls = array_diff( $urls, array( $emoji_svg_url ) );
}
  return $urls;
}

?>