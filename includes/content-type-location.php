

  <?php if ( have_posts() ) : ?>
<section class="acf-location">
 <?php while ( have_posts() ) : the_post();  ?>
    <div class="grid-container">
      <div class="grid-x grid-margin-x text-center grid-padding-y">
        <div class="cell small-12 medium-12">
          <h1 class="entry-title primary"><?php the_title (); ?></h1>
        </div>
      </div>
    </div>

          <div class="grid-container">
            <div class="grid-x grid-margin-x">
              <div class="cell small-12 medium-6">
                <div class="entry-content">
                  <?php the_content (); ?>
                </div>

                <a class="directions button primary" target="_blank" title="Get Directions" href="https://www.google.com/maps?saddr=My+Location&daddr=<?php $location = get_field('map'); echo $location['lat'] . ',' . $location['lng']; ?>"><?php _e('Get Directions','roots'); ?></a>



                <div class="loc-address">
                <?php


                // Get your field
$address = get_field('map');
// Get the Address String
$location = $address['address'];
// Find the first comma and replace it with a break
$string = strpos($location,',');
if ($post !== false) {
	$newstring = substr_replace($location,'<br />',$string,strlen(','));
}
// Find the "US" at the end of the string
$us = ', United States';
// And drop if from the Address
$trimmedAdd = str_replace($us, '', $newstring);
// spit it out
echo $trimmedAdd;?>

<?php $s1clean = get_field('phone_number');
$s1clean = str_replace(["-", "–"], '', $s1clean);?>

<h4><a href="tel:<?php echo $s1clean; ?>"><?php the_field('phone_number'); ?></a></h4>
                </div>
                <div class="location-hours callout">
                  <h4>Hours</h4>
                  <?php the_field('location_hours'); ?>
                </div>

                <div class="loc-services callout">
                  <h4>Dry Cleaning Services:</h4>
                  <?php

                  $posts = get_field('services_offered');

                  if( $posts ): ?>
                      <ul>
                      <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                          <?php setup_postdata($post); ?>
                          <li>
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                          </li>
                      <?php endforeach; ?>
                        <li><a href="/services/" title="Puritan Dry Cleaning Services">View all of our services!</a>
                      </ul>
                      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                  <?php endif; ?>

                </div>
              </div>
              <div class="cell small-12 medium-6">
                <div class="grid-container loc-map">
                  <?php

                  $location = get_field('map');

                  if( !empty($location) ):
                  ?>
                  <div class="acf-map thumbnail">
                  	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                  </div>
                  <?php endif; ?>
                </div>

                <div class="grid-container text-center loc-staff">
                           <?php if( have_rows('staff_group') ): ?>

                               <div class="grid-x grid-margin-x">
                                 <?php while( have_rows('staff_group') ): the_row(); ?>

                                   <div class="cell small-6 medium-4 large-4">
                                     <img src="<?php the_sub_field('staff_picture'); ?>" alt="<?php the_sub_field('staff_name'); ?>" class="thumbnail" />

                                    <div class="subheader h6">
                                      <?php the_sub_field('staff_name'); ?><br />
                                    <?php the_sub_field('staff_title'); ?>
                                  </div>
                                  </div>

                            <?php endwhile; ?>  </div>
                        <?php else : endif; ?>  </div>
                          <div class="location-quality">
                           <?php the_field('quality'); ?>
                          </div>
              </div>
            </div>
          </div>
</section>




<section class="flex-content">
<div class="grid-container">
<?php
          // check if the flexible content field has rows of data
          if( have_rows('flex_content') ):
               // loop through the rows of data
              while ( have_rows('flex_content') ) : the_row();
              // Load Flex Content Section
              if( get_row_layout() == 'content_section' ): get_template_part('includes/flex/section-content');
              // Load Flex Accordion Section
              elseif( get_row_layout() == 'accordion_section' ): get_template_part('includes/flex/section-accordion');
              // Load Flex Accordion Section
              elseif( get_row_layout() == 'gallery_section' ): get_template_part('includes/flex/section-gallery');
              // Load Flex Staff Content
              elseif( get_row_layout() == 'staff_section' ): get_template_part('includes/flex/section-staff');
             endif; endwhile;  else :
              // no layouts found
          endif; // Flex Layouts Ends

	endwhile; ?> </div></section>
    <?php endif; wp_reset_query (); // Loop Ends?>
