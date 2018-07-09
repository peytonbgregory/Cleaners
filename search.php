<?php
/*
Template Name: Search Page
*/
get_header();?>
	<section class="bg-light-gray <? echo pg_class_loop(); ?>" id="index-wrapper">
		<div class="grid-container">
			<div class="grid-x grid-margin-y grid-margin-x align-strech">
				<div class="cell small-12 medium-8">
					<h2>Search results for:<small> <?php echo get_search_query(); ?></small></h2>
		
					<div class="callout"><?php get_template_part('includes/content-thumbnail-grid'); ?></div>
					
					
					<div class="callout">
					<h4>Can't find what you're looking for?</h4>
					<?php get_search_form(); ?>
					</div>

				</div>
				<div class="cell small-12 medium-4">
					
					<?php get_sidebar(); ?>
				</div>
			</div><!-- grid-x -->
		</div><!-- grid-container -->
	</section>
<?php get_footer();