<?php

// -- Disable custom font sizes
add_theme_support( 'disable-custom-font-sizes' );

// -- Disable custom color
add_theme_support( 'disable-custom-colors' );

// -- Enable editor styles
add_theme_support('editor-styles');

// -- Enable responsive embedded content
add_theme_support( 'responsive-embeds' );


// -- Enqueue editor script
function tse_gutenberg_scripts() {
  // modernizr
  wp_enqueue_script (
    'tse-modernizr',
    get_stylesheet_directory_uri() . '/js/vendor/modernizr-3.6.0.min.js',
    filemtime( get_stylesheet_directory() . '/js/vendor/modernizr-3.6.0.min.js' ),
    true
  );
  // plugins
  wp_enqueue_script (
    'tse-editor-plugins',
    get_stylesheet_directory_uri() . '/js/plugins.js',
    array( 'jquery' ),
    filemtime( get_stylesheet_directory() . '/js/plugins.js' ),
    true
  );
  // custom
  wp_enqueue_script (
    'tse-editor-custom',
    get_stylesheet_directory_uri() . '/js/custom.js',
    array( 'tse-editor-plugins' ),
    filemtime( get_stylesheet_directory() . '/js/custom.js' ),
    true
  );
  // editor js
  wp_enqueue_script (
    'tse-editor',
    get_stylesheet_directory_uri() . '/js/editor.js',
    array( 'wp-blocks', 'wp-dom' ),
    filemtime( get_stylesheet_directory() . '/js/editor.js' ),
    true
  );
  // load typekit/google fonts
  // wp_enqueue_style('typekit-fonts', '//use.typekit.net/soi0ors.css', 'all');
}
add_action( 'enqueue_block_editor_assets', 'tse_gutenberg_scripts' );


// -- Load custom css in editor
function tse_editor_css() {
  ?>
  <style type="text/css">
    /* change the root font size as all selector values are rem unit */
    html {
      font-size: 10px;
    }
    /* change editor post title height */
    textarea#post-title-0 {
      height: 75px;
    }
    /* change the font styles as per project */
    #editorcontainer #content, #wp_mce_fullscreen, textarea.wp-editor-area {
      /* change it to font used in your project */
      /* font-family: 'titling-gothic-fb', sans-serif; */
      font-size: 1.6rem;
      line-height: 1.7;
    }
    /* Increase block editor sidebar */
    .edit-post-layout.is-sidebar-opened .edit-post-layout__content {
      margin-right: 25vw !important;
    }
    .edit-post-layout.is-sidebar-opened .edit-post-plugin-sidebar__sidebar-layout, .edit-post-layout.is-sidebar-opened .edit-post-sidebar, .edit-post-toggle-publish-panel {
      width: 25vw !important;
    }
    /* Main column width */
    .wp-block {
      max-width: 100%;
    }
    /* Width of "wide" blocks */
    .wp-block[data-align="wide"] {
        max-width: rem-calc( 1080px );
    }
    /* Width of "full-wide" blocks */
    .wp-block[data-align="full"] {
        max-width: none;
    }
  </style>
  <?php
}
add_action('admin_head-post.php', 'tse_editor_css');
add_action('admin_head-post-new.php', 'tse_editor_css');


// -- Remove Gutenberg Block Library CSS from loading on the frontend
function tse_remove_wp_block_library_css() {
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'tse_remove_wp_block_library_css' );

?>