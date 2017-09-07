<?php 
$facebook   = get_field('facebook_url', 'option');
$youtube    = get_field('youtube_url', 'option');
$twitter	= get_field('twitter_url', 'option');
$instagram  = get_field('instagram_url', 'option');
$pinterest  = get_field('pinterest_url', 'option');
$googleplus = get_field('googleplus_url', 'option');
$linkedin   = get_field('linkedin_url', 'option');
$bandcamp   = get_field('bandcamp_url', 'option');

	if ($facebook && !empty($facebook) && $youtube && !empty($youtube) && $twitter && !empty($twitter) && $instagram && !empty($instagram) && $pinterest && !empty($pinterest) && $googleplus && !empty($googleplus) && $linkedin && !empty($linkedin) && $bandcamp && !empty($bandcamp))
	{}
	else {
	echo '<div id="social-media"><ul class="social-sprite">';
		if( get_field('facebook_url', 'option') ):  echo '<li class="facebook">','<a href="'.$facebook.'" target="_blank" title="Facebook" class="social-icon"></a></li>'; endif; 
		if( get_field('youtube_url', 'option') ):   echo '<li class="youtube"><a href="'.$youtube.'" target="_blank" title="YouTube" class="social-icon"></a></li>'; endif;
    	if( get_field('twitter_url', 'option') ):   echo '<li class="twitter"><a href="'.$twitter.'" target="_blank" title="Twitter" class="social-icon"></a></li>'; endif;
    	if( get_field('instagram_url', 'option') ): echo '<li class="instagram"><a href="'.$instagram.'" target="_blank" title="Instagram" class="social-icon"></a></li>'; endif;
    	if( get_field('pinterest_url', 'option') ): echo '<li class="pinterest"><a href="'.$pinterest.'" target="_blank" title="Pinterest" class="social-icon"></a></li>'; endif;
    	if( get_field('google_url', 'option') ):    echo '<li class="googleplus"><a href="'.$googleplus.'" target="_blank" title="Google Plus" class="social-icon"></a></li>'; endif;
    	if( get_field('linkedin_url', 'option') ):  echo '<li class="linkedin"><a href="'.$linkedin.'" target="_blank" title="LinkedIn" class="social-icon"></a></li>'; endif;
		if( get_field('bandcamp_url', 'option') ):  echo '<li class="bandcamp"><a href="'.$bandcamp.'" target="_blank" title="Bandcamp" class="social-icon"></a></li>'; endif;     
    echo '</ul></div>'; 
	}	