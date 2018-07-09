<?php get_header();
if ( 'location' == get_post_type() ) {
	get_template_part('includes/content-thumbnail-location');
} elseif ( 'video' == get_post_type() ) { 
	get_template_part('includes/content-type-video');
 } else {
	get_template_part('includes/content-thumbnail-column');
} 
get_footer();