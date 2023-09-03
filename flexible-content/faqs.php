<?php 
if (get_row_layout() == 'faqs') :
  $heading = get_sub_field('heading');
  $faqs = get_sub_field('faqs');
?>
  
<div class="kpl-faq">
  <div class="container">
    <?php if($heading): ?>
      <h3><?php echo $heading; ?></h3>
    <?php endif; ?>

    <?php if($faqs && is_array($faqs) && count($faqs)>0): ?>
      <div class="accordion" id="accordionExample">
        <?php foreach ($faqs as $key => $faq) :?>
          <!-- accordion-item -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading-<?php echo $key; ?>">
              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-<?php echo $key; ?>" aria-expanded="<?php echo ($key === 0)?'true':'false'; ?>" aria-controls="collapse-<?php echo $key; ?>"><?php echo $faq['heading']; ?></button>
            </h2>
            <div id="collapse-<?php echo $key; ?>" class="accordion-collapse collapse <?php echo ($key === 0)?'show':''; ?>" aria-labelledby="heading-<?php echo $key; ?>"
                data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p><?php echo $faq['description']; ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        

      </div>
    <?php endif; ?>

  </div>
</div>

<?php endif; ?>