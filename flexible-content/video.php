<?php 
if (get_row_layout() == 'video') :  
  $heading = get_sub_field('heading');
  $video_url = get_sub_field('video_url');
  
?>    
    <!-- kpl-video -->
    <div class="kpl-video">
        <div class="container">
          <?php if($heading): ?>
            <h2><?php echo $heading; ?></h2>
          <?php endif; ?>

          <?php if($video_url): ?>
            <iframe width="100%" height="540" src="<?php echo $video_url; ?>" title="KPL Oil Mills"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <?php endif; ?>
        </div>
    </div>  
<?php endif; ?>