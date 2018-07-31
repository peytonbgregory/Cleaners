<?php
/*
Template Name: Page - Home
*/
get_header(); ?>
<section id="slideshow" class="divider">
	<div class="grid-container full">
		<?php echo do_shortcode("[metaslider id=121]"); ?>
	</div>
</section>

<section id="intro" class="divider">
	<div>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12">
					<?php // get_template_part ('includes/content'); ?>
					<?php get_template_part('includes/content-type-flex'); ?>
				</div>
		  </div>
		</div>
	</div>
</section> 

<section id="service-one" class="service divider">
	<div class="parallax parafirst" <?php if(get_field('po_background')): ?> style="background: url('<?php the_field('po_background'); ?>') no-repeat;" <?php endif; ?>>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-10 medium-6 large-6">
					<div class="radius shadow puritan-box-wrapper">
						<div class="radius">
							<h1><?php the_field('po_heading'); ?></h1>
							<?php the_field('po_text'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="service-two" class="service divider">
	<div class="parallax parafirst" <?php if(get_field('pt_background')): ?> style="background: url('<?php the_field('pt_background'); ?>') no-repeat;" <?php endif; ?>>
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-10 medium-6 large-6">
					<div class="radius shadow puritan-box-wrapper">
						<div class="radius">
							<h1><?php the_field('pt_heading'); ?></h1>
							<?php the_field('pt_text'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>