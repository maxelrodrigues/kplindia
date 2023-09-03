<?php 
if (get_row_layout() == 'banner') :  
  $banner = get_sub_field('banner_image');
  
  if($banner && is_array($banner) && $banner['id']): 
?>    
  <div class="kpl-md-banner">
    <div class="container">
      <?php echo wp_get_attachment_image($banner['id'],array('1257', '280'), "", array( "class" => "img-responsive img-fluid" ) ); ?>
    </div>
  </div>
  <?php endif; ?>  
<?php endif; ?>