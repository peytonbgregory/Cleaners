<?php get_header(); // Load Header ?>


<?php // To load Awards page spesific content 
if (is_page('awards')) { ?>
	<?php if( have_rows('award') ): ?>
		<section class="grid-container fluid" id="award-wrapper">
			<div class="grid-container">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="grid-x grid-margin-x align-strech small-up-1 medium-up-2" data-equalizer data-equalize-by-row="true" id="award-eq">
				<?php while ( have_rows('award') ) : the_row(); ?>
					<div class="cell">
						<div class="callout small" data-equalizer-watch>
							<img src="<?php the_sub_field('award_image'); ?>" alt="<?php the_sub_field('award_name'); ?>" class="thumbnail award-img alignleft" width="200"/>
							<h4 class="post-title"><?php the_sub_field('award_name'); ?></h4>
							<div class="entry-summary"><?php the_sub_field('award_caption'); ?></div>
						</div>
					</div>
				<?php endwhile; ?>
				</div><!-- grid-x -->
			</div><!-- grid-container -->
		</section>
	<?php endif; // Repeater End ?>			
<?php } else {  // Awards Page ?>
<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="cell small-12 medium-8 large-9">
			<?php get_template_part('includes/content'); // Loads Customized Flex Content ?>
			<?php get_template_part('includes/content-type-flex'); // Loads Customized Flex Content ?>
		</div>
		<div class="cell small-12 medium-4 large-3">
			<?php get_sidebar(); // Loads sidebar widgets ?>
		</div>			
	</div>
</div>
<?php } // end if page is then else... ?>
<?php get_footer(); // Load Footer