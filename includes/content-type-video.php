<div class="site-content grid-container" id="video-content">       
    <div class="grid-x grid-margin-x">
    <?php the_post(); ?>
    <div class="cell small-12 small-order-1 medium-order-1 large-order-1">
		<header class="entry-header text-center">
		<h1 class="entry-title">Puritan Cleaners Videos</h1>
		</header>
		</div>
		<div class="cell small-12 medium-4 large-3 small-order-3 medium-order-2 large-order-2" id="VidPlaylist">
			<div class="callout">
				<?php
				$cats = get_terms(array('videos'), '');
				$terms = get_the_terms($post->ID, 'videos');
				reset($terms);
				$key = key($terms);
				$term_id = $terms[$key]->term_id;
				$term_name = $terms[$key]->name;

				echo '<h4>Video Playlists</h4>';
				echo '<ul class="no-bullet">'; 
				foreach($cats as $cat) { 
					echo '<li><h5><a'.($cat->term_id == $term_id ? ' class="active"' : '').' href="'.get_bloginfo('url').'/videos/'.$cat->slug.'">'.$cat->name.'</a></h5></li>';
				}
				echo '</ul>';
				?>
				
				
			</div>
		</div>
        <div class="cell small-12 medium-8 large-9 small-order-2 medium-order-3 large-order-3" id="VidPlaywrap">
			<div class="vidright">
			<?php (is_tax() ? $term_name = $term_name : $term_name = $cats[0]->name); ?>
				<?php
				wp_reset_query();
				global $post;
				$args = array(
					'post_type'	=> 'videos',
					'numberposts' => -1,
					'posts_per_page' => -1,
					'tax_query' => array(
					  array(
						 'taxonomy' => 'videos',
						 'field' => 'id',
						 'terms' => array($term_id),
						 'operator' => 'IN'
					  )
				   )
				);
				
				$videos = get_posts($args);
				$vidmeta = get_post_meta($post->ID, '__cbc_video_data', true);

				?>
				<div class="vidplayer callout">
					<div class="responsive-embed widescreen">
						<iframe width="650" height="365" src="//www.youtube.com/embed/<?php echo $vidmeta['video_id']; ?>" frameborder="0" allowfullscreen></iframe>
					</div>
					<h3><?php echo $post->post_title; ?></h3>
					<p><?php echo $post->post_content; ?></p>
				</div>
				<div class="vidplaylist callout">
					<h4><small>Current Playlist:</small> <?php echo $term_name; ?></h4>
		
					<div class="vidscroll">
					<?php
					if($videos) : foreach($videos as $video) :
						$meta = get_post_meta($video->ID, '__cbc_video_data', true);
						echo '<div class="vidwrap"><a href="'.get_permalink($video->ID).'">';
						

						

						echo '</a><a class="h6" href="'.get_permalink($video->ID).'">'.$video->post_title.'</a></div>';
					endforeach; endif; 
					?>
					</div>
					
				</div>
			</div>
        </div>
    </div>
</div>