<?php

// Create a new block category
////////////////////////////////////////////////
function tse_block_category( $categories, $post ) {
  return array_merge(
    $categories,
    array(
      array(
        'slug' => 'threesixtyeight',
        'title' => __( 'ThreeSixtyEight', 'tse' ),
      ),
    )
  );
}
add_filter( 'block_categories', 'tse_block_category', 10, 2);

function tse_register_acf_blocks() {

  // Sample
  ////////////////////////////////////////////////
  acf_register_block_type(array(
    'name'              => 'homepage-hero',
    'title'             => __( 'Homepage Hero', 'tse' ),
    'description'       => __( 'Generally used as a banner at the beginning of the page', 'tse' ),
    'category'          => 'threesixtyeight',
    'icon'              => 'layout',
    'keywords'          => array( 'banner', 'tse' ),
    'render_template'  	=> 'acf-blocks/blank.php',
    'example'           => [],
    'mode'              => 'edit',
    'post_types'        => array( 'page' ),
    'supports'          => array(
      'align' => false,
    ),
  ));

}


// Check if function exists and hook into setup
////////////////////////////////////////////////
if ( function_exists( 'acf_register_block_type' ) ) {
  add_action( 'acf/init', 'tse_register_acf_blocks' );
}