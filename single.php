<?php get_header();
if ( 'video' == get_post_type() ) {
            get_template_part('includes/content-type-video');
} elseif ( 'locations' == get_post_type() ) {
			// get_template_part('includes/content');
			get_template_part('includes/content-type-location'); 
	} elseif ( 'services' == get_post_type() ) {
			get_template_part('includes/content');
			get_template_part('includes/content-type-flex'); ?>
	
<?php
 } else {
			get_template_part('includes/content');
			get_template_part('includes/content-type-flex');
}

get_footer(); 