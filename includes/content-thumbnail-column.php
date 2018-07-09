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
   	<div class="grid-x grid-margin-x small-up-1 medium-up-2" data-equalizer data-equalize-by-row="true" id="archive-thumb-eq">    
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="cell">
				<div class="callout small" data-equalizer-watch>
					<?php if ( has_post_thumbnail()) { ?>
					<a title="Read more about <?php the_title(); ?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('thumbnail', array('class'=>'arch-thumbnail alignleft')); ?></a>
					<?php } ?>
					<h4 class="post-title truncate"><a title="Read more about <?php the_title(); ?>" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
					<div class="entry-content">
						<?php the_excerpt(); ?> 
						
						
					</div>
					<div class="entry-button-fixer text-center medium-text-right">
					<a class="button small" title="Read more about <?php the_title(); ?>" href="<?php the_permalink(); ?>" rel="bookmark">Read More</a>
					</div>
				</div><!-- small-12 med-6 -->
			</div><!-- well -->
		<?php endwhile; endif; ?>
	</div>
</section>