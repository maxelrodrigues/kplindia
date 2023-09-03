<?php 
if (get_row_layout() == 'featured_products') :
  
  $heading = get_sub_field('heading');
  $products = get_sub_field('products');

 ?>

<div class="kpl-travel">
  <div class="container">
    <?php if($heading): ?>
      <h2 class="text-center"><?php echo $heading; ?></h2>
    <?php endif; ?>

      <?php if ($products && is_array($products) && count($products) > 0) : ?>

        <div id="owl-demo" class="owl-carousel owl-theme">
          <?php foreach ($products as $key => $product) : ?>
            <?php if (has_post_thumbnail($product->ID)) : ?>
              <a href="<?php echo get_permalink($product->ID); ?>" class="item" title="<?php echo get_the_title($product->ID); ?>">
                <?php echo get_the_post_thumbnail($product->ID); ?>
              </a>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
            
      <?php endif; ?>

  </div>
</div>

<?php endif; ?>