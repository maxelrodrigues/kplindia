<?php 
if (get_row_layout() == 'download_section') :  
  $file = get_sub_field('file');
  $heading = get_sub_field('heading');
  $button_text = get_sub_field('button_text');
  if($file):
?>
  <div class="download-section">
      <div class="container">
        <?php if($heading): ?>
        <h5><?php echo $heading; ?></h5>
        <?php endif; ?> 
        <a href="<?php echo $file; ?>" target="_blank" class="btn btn-lg">Download</a>
      </div>
  </div>
<?php 
endif;
endif;
?>