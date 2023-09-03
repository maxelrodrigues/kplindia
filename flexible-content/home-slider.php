<?php if (get_row_layout() == 'home_slider') : ?>

  <?php 
    $slider = get_sub_field('slider');
  ?>

  <!-- Carousel -->
  <div id="demo" class="carousel" data-bs-ride="carousel">

    <?php if($slider && is_array($slider) && count($slider) > 0): ?>
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      </div>      
      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <?php foreach ($slider as $key => $slide): ?>
          <div class="carousel-item active">
              <div class="container">
                  <div class="slider-text">
					<?php if($slide['heading']): ?>
                      <h2><?php echo $slide['heading']; ?></h2>
					<?php endif; ?>
                  </div>
              </div>
			<?php 
            if($slide['background'] && $slide['background']['ID']):
                 echo wp_get_attachment_image( $slide['background']['ID'], "large", "", array( "class" => "img-responsive d-block" , "style" => "width:100%") ); 
            endif; 
			?>
          </div>
        <?php endforeach; ?>

      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    <?php endif; ?>
  </div>

<?php endif; ?>