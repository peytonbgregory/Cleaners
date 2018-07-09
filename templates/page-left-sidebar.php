<?php
/*
Template Name: Page - Left Sidebar
*/
get_header(); ?>
<div class="grid-container page-left-sidebar-wrap">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12 medium-4 large-3">
			<?php get_sidebar(); ?>
		</div>	
		<div class="cell small-12 medium-8 large-9">
			<?php get_template_part('includes/content'); // Loads Customized Flex Content ?>
			<?php get_template_part('includes/content-type-flex'); // Loads Customized Flex Content ?>
		</div>
				
	</div>
</div>
<?php get_footer(); ?>