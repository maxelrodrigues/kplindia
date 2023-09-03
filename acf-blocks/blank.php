<?php
  // Block options
  $bg_color             = get_field('background_color');
  // Developer options
  $padding_top          = get_field( 'padding_top' );
  $padding_bottom       = get_field( 'padding_bottom' );
  $custom_classes       = get_field( 'custom_classes' );
  $custom_css           = get_field( 'custom_css' );
?>

<section class="<?php echo $bg_color; ?> <?php echo $padding_top; ?> <?php echo $padding_bottom; ?> <?php echo $custom_classes; ?>" style="<?php echo $custom_css; ?>">
</section>