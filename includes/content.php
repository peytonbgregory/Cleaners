<?php if ( have_posts() ) : ?> 
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="entry-content">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
	<? endwhile; ?>
<?php endif; wp_reset_query (); ?>
