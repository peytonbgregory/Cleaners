<?php get_header();?>
	<section class="<? echo pg_class_loop(); ?>" id="category-wrapper">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-y align-strech">
				<div class="cell small-12 medium-8 large-9">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="callout">
							<h3 class="entry-title subheading truncate"><?php the_title(); ?></h3>
							<div class="entry-content">
								<?php the_excerpt(); ?>
								<hr />
								<a href="<?php the_permalink(); ?>" title="Read more about <?php the_title(); ?>" class="button">Read More</a>
							</div>
						</div>
					<?php endwhile; else : endif; ?>
				</div>
				<div class="cell medium-4 large-3">
					<?php get_sidebar(); ?>
				</div>
			</div><!-- grid-x -->
		</div><!-- grid-container -->
	</section>
<?php get_footer();