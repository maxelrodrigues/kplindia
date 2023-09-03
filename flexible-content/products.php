<?php 
if (get_row_layout() == 'products') :
  
  $heading = get_sub_field('heading');
  $args = array(
    'post_type'      => 'product',
    'post_status'    => 'publish',
    'posts_per_page' => -1, 
  );

  $products_query = new WP_Query( $args );

 ?>

<div class="products mt-5 mb-5  mb-lg-10">
  <div class="container">
  <div class="row">
    <?php  if ( $products_query->have_posts() ) : ?>

      <div class="content-side col-lg-8 col-md-12 col-sm-12 shop-page-one_inner">
          <div class="row">
            <?php while ( $products_query->have_posts() ) : $products_query->the_post(); ?>
              <div class="col-sm-6 col-md-4 text-center mb-3">
                <div class="product-card">
                <?php if(has_post_thumbnail()): ?>
                  <a href="<?php the_permalink(); ?>" class="item" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail(); ?>

                    <h5><?php the_title(); ?></h5>
                  </a>
                <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
        </div>      
        <?php 
          wp_reset_postdata(); 
          endif;     
        ?>
    </div>


    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
      <aside class="blog-sidebar default-sidebar">
        
          <div  class="widget top-rated-products">
            <h4 class="widget-title">Top Rated Products</h4>
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 5,
                'meta_key' => '_wc_average_rating',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
            );

            $top_rated_products = wc_get_products($args);

            if ($top_rated_products) {
                foreach ($top_rated_products as $product) {
                    echo '<div class="product">';
                    
                    if (has_post_thumbnail($product->get_id())) {
                        $image_id = get_post_thumbnail_id($product->get_id());
                        $image_url = wp_get_attachment_image_src($image_id, 'full');
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

                        echo '<a href="' . esc_url(get_permalink($product->get_id())) . '">';
                        echo '<img src="' . esc_url($image_url[0]) . '" alt="' . esc_attr($image_alt) . '">';
                        echo '</a>';
                    }
                    
                    echo '<a href="' . esc_url(get_permalink($product->get_id())) . '">' . esc_html($product->get_name()) . '</a>';
                    echo '</div>';
                }
            } else {
                echo 'No top rated products found.';
            }
            ?>


          </div>   
        <?php endif; ?>     
      </aside>
    </div>
  </div>

  </div>
</div>

