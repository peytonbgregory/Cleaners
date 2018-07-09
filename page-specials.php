<?php
/* Template Name: Specials Template */
get_header();
?>
 
<div class="site-content container default">       
    <div id="pclcontent">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php if(get_field('optional_header')) echo '<h2 class="dblbtmbrdr">'.get_field('optional_header')."</h2>"; ?>
        <div class="leftfloatwrap">
			<div class="twocolleft">
				<?php the_content();
				$rows = get_field('specials');
				if($rows)
				{
					echo '<table id="servicestbl"><tbody>';
					echo '<tr><th colspan="2"><h5>Weekly Specials</h5></th></tr>';
					$time = mktime(0, 0, 0, date('n'), date('j') - 1);
					$i = 1;
					$break = get_field('display_number');
					function sortFunction( $a, $b ) {
						return strtotime($a["date"]) - strtotime($b["date"]);
					}
					usort($rows, "sortFunction");
					foreach($rows as $row)
					{
						$date = strtotime($row['date']);
						$spesh = $row['special'];
						if($date > $time && $spesh)
						{
							echo '<tr><td><h5>'.date('F j, Y', $date).'</h5></td><td><h5>'.$spesh.'</h5></td></tr>';
							if($i++ == $break) break;
						}
					}
					echo '</tbody></table>';
				}
				?>
			</div>
			<div class="twocolright">
				<?php if(get_field('specials_images')) the_field('specials_images'); ?>
			</div>
    <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>