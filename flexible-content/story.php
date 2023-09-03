<?php 
if (get_row_layout() == 'story') : 
  $title = get_sub_field('title');
  $heading = get_sub_field('heading');
  $description = get_sub_field('description');
  $image = get_sub_field('image');
?>
<div class="kpl-story">
  <div class="container">
    <div class="row">

    <?php if($image && is_array($image) && $image['id']): ?>
      <div class="col-md-6">
        <?php echo wp_get_attachment_image($image['id'],array('621', '635'), "", array( "class" => "img-responsive" ) ); ?>
      </div>
    <?php endif; ?>

      <div class="col-md-6 d-flex align-tem-cemter flex-column justify-content-center">
        <?php if($title): ?>
          <label for=""><?php echo $title; ?></label>
        <?php endif; ?>

        <?php if($heading): ?>
          <h2 class="mb-5"><?php echo $heading; ?></h2>
        <?php endif; ?>

        <?php if($description): ?>
          <p><?php echo $description; ?></p>
        <?php endif; ?>
      </div>

    </div>
  </div>
</div>
<?php endif; ?>