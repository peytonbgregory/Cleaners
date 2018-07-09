<section class="grid-x grid-margin-x align-strech" id="flex-section-gallery">



    <?php // Gallery Options

    // vars
    $galleryopt = get_sub_field('gallery_options');


    // check
    if( $galleryopt && in_array('go1', $galleryopt) ): ?>
    <div class="cell small-12 medium-12">
      <h2><?php the_sub_field('heading'); ?></h2>
    </div>
    <?php endif; ?>






    <?php if( $galleryopt && in_array('go2', $galleryopt) ): ?>

      <div class="cell small-12 medium-6 large-6 <?php if( $galleryopt && in_array('go3', $galleryopt) ): echo 'medium-order-2 large-order-2'; else : echo 'medium-order-1 large-order-1'; endif; ?>">
        <p><?php the_sub_field('description'); ?></p>
      </div>
  <?php endif; ?>








    <?php
    $images = get_sub_field('gallery');
    $size = 'full'; ?>

    <div class="cell auto <?php if( $galleryopt && in_array('go3', $galleryopt) ): echo 'medium-order-1 large-order-1'; else : echo 'medium-order-2 large-order-2'; endif; ?>">

    <?php if( $images ): ?>


          <div class="grid-x grid-margin-x <?php if( $galleryopt && in_array('go3', $galleryopt) ): echo 'small-up-3 medium-up-3 large-up-4'; else : echo 'small-up-3 medium-up-4 large-up-5'; endif; ?>">
            <?php foreach( $images as $image ): ?>
                <div class="cell">
                	  <a class="thumbnail" data-toggle="flexgallery"><?php echo wp_get_attachment_image( $image['ID'], 'gallery-thumbnail' ); ?></a>
                </div>
            <?php endforeach; ?>
          </div>


        <div class="large reveal" id="flexgallery" data-reveal data-close-on-click="true" data-animation-in="fade-in" data-animation-out="fade-out">
        <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
          <button class="close-button" data-close aria-label="Close reveal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="subheading h5"><?php the_sub_field('heading'); ?></div>
        </div>
    <?php endif; ?>
</div>

<section>
