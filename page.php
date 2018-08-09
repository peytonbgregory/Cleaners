<?php get_header(); ?><div class="grid-container">	<div class="grid-x grid-margin-x">				<div class="cell small-12 page-heading padding-vertical-1">			<?php the_title('<h1 class="entry-title margin-0">','</h1>'); ?>		</div>				<div class="cell auto">						<?php if (is_page('awards') && have_rows('award')) { ?>						<div class="grid-x grid-margin-x align-strech small-up-1 medium-up-2" data-equalizer data-equalize-by-row="true" id="award-eq">					<?php while ( have_rows('award') ) : the_row(); ?>						<div class="cell">							<div class="callout small" data-equalizer-watch>								<img src="<?php the_sub_field('award_image'); ?>" alt="<?php the_sub_field('award_name'); ?>" class="thumbnail award-img alignleft" width="200"/>								<h4 class="post-title"><?php the_sub_field('award_name'); ?></h4>								<div class="entry-summary"><?php the_sub_field('award_caption'); ?></div>							</div>						</div>					<?php endwhile; ?>				</div><!-- grid-x -->									<?php } else { ?>							<?php get_template_part('includes/content'); ?>				<?php get_template_part('includes/content-type-flex'); ?>						<?php } ?>						<?php if(is_page('specials')) { ?>									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>			<?php if(get_field('optional_header')) echo '<h2 class="dblbtmbrdr">'.get_field('optional_header')."</h2>"; ?>				<div class="leftfloatwrap">					<div class="twocolleft">						<?php the_content();						$rows = get_field('specials');						if($rows)						{							echo '<table id="servicestbl"><tbody>';							echo '<tr><th colspan="2"><h5>Weekly Specials</h5></th></tr>';							$time = mktime(0, 0, 0, date('n'), date('j') - 1);							$i = 1;							$break = get_field('display_number');							function sortFunction( $a, $b ) {								return strtotime($a["date"]) - strtotime($b["date"]);							}							usort($rows, "sortFunction");							foreach($rows as $row)							{								$date = strtotime($row['date']);								$spesh = $row['special'];								if($date > $time && $spesh)								{									echo '<tr><td><h5>'.date('F j, Y', $date).'</h5></td><td><h5>'.$spesh.'</h5></td></tr>';									if($i++ == $break) break;								}							}							echo '</tbody></table>';						}						?>					</div>					<div class="twocolright">						<?php if(get_field('specials_images')) the_field('specials_images'); ?>					</div>			<?php endwhile; ?>			<?php else : ?>			<?php endif; ?>			</div>							<?php } ?>					</div><!-- cel auto -->				<?php get_sidebar(); ?>				</div></div><?php get_footer(); ?>