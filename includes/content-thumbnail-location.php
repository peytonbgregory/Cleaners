<?php /* Grid Layout with hover effects for archive and category pages */ ?>
<section class="grid-container" id="thumbnail-column">
	<?php if ( have_posts() ) : ?> 
		<div class="grid-x grid-margin-x">
			<div class="cell small-12">
				<header class="entry-header text-center">
					<h1 class="entry-title"><?php bloginfo('name'); ?> <?php $post_type = get_post_type( $post->name ); echo $post_type; ?></h1>
				</header>
			</div>
		</div>
   	<div class="grid-x grid-margin-x small-up-1 medium-up-3" data-equalizer data-equalize-by-row="true" id="archive-thumb-eq">    
    <?php while ( have_posts() ) : the_post(); ?>
	
	<div class="cell">
		<div class="callout small" data-equalizer-watch>
			<div class="grid-container">
				<div class="grid-x grid-margin-x">

					
						<div class="cell small-12">
						<h4 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
						 <div class="loc-map">
                  <?php

                  $location = get_field('map');

                  if( !empty($location) ):
                  ?>
                  <div class="acf-map hide-for-small-only">
                  	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                  </div>
                  <?php endif; ?>
                </div>

						</div>
				
					<div class="cell small-12">
						<small>     
							
							<div class="entry-content">
								                



                <div class="loc-address">
					<div class="hide-for-small-only"><strong><?php the_title(); ?> Address</strong></div>
                <?php


                // Get your field
$address = get_field('map');
// Get the Address String
$location = $address['address'];
// Find the first comma and replace it with a break
$string = strpos($location,',');
if ($pos !== false) {
	$newstring = substr_replace($location,'<br>',$string,strlen(','));
}
// Find the "US" at the end of the string
$us = ', United States';
// And drop if from the Address
$trimmedAdd = str_replace($us, '', $newstring);
// spit it out
echo $trimmedAdd;?>

<h4><a href="<?php the_field('phone_number'); ?>"><?php $data = the_field('phone_number');

if(  preg_match( '/^\+\d(\d{3})(\d{3})(\d{4})$/', $data,  $matches ) )
{
$result = $matches[1] . '-' .$matches[2] . '-' . $matches[3];
return $result;
} ?></a></h4>
                </div>
							</div>
							<div class="button-group small">
								<a class="directions button secondary" target="_blank" title="Get Directions" href="https://www.google.com/maps?saddr=My+Location&daddr=<?php $location = get_field('map'); echo $location['lat'] . ',' . $location['lng']; ?>"><?php _e('Get Directions','roots'); ?></a><a class="button primary" href="<?php the_permalink(); ?>">Learn More</a></div>
						</small>
					</div>

				</div><!-- grid-x -->
			</div>
		</div><!-- small-12 med-6 -->
	</div><!-- well -->
	
	<?php endwhile; endif; ?>
	</div>
</section>