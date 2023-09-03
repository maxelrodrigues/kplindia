<?php 
if (get_row_layout() == 'contact_cards') :  
    $cards = get_sub_field('cards');
?>

    <div class="contact-strip">
      <div class="container">
        <?php if($cards && is_array($cards) && count($cards) > 0): ?>
          <div class="row">
            <?php foreach ($cards as $key => $card) : ?>
              <div class="col-md-4">

                <div class="contact-box">
                  <?php if($card['icon'] && is_array($card['icon']) && $card['icon']['id']): ?>
                    <div>
                      <?php echo wp_get_attachment_image($card['icon']['id'],array('60', '60'), "", array( "class" => "img-responsive" ) ); ?>
                    </div>
                  <?php endif; ?>

                  <h4><?php echo $card['heading']; ?></h4>
                  <p><?php echo $card['content']; ?></p>

                </div>

              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

<?php endif; ?>