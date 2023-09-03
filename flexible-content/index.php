<?php

if( !post_password_required( $post )): 

	global $flexi_counter;
	$flexi_counter = 0;
	if ( have_rows('flexible_content') ) :
	while ( have_rows('flexible_content') ) : the_row();
	$flexi_counter++;
?>

	<?php $layout = str_replace( '_', '-', get_row_layout() ); // replace underscore to dash ?>
	<?php get_template_part( 'flexible-content/' . $layout  ); ?>

<?php
	endwhile; //layout
	endif; //layout
	endif;
?>