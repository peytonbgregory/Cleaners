<?php // Functions imported from previous


function custom_field_excerpt($field) {
	global $post;
	$text = get_sub_field($field);
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$excerpt_length = 20; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '[...see more...]');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}


// ADD WMODE to YOUTUBE VIDEO EMBEDS
function add_video_wmode_transparent($html, $url, $attr) {

if ( strpos( $html, "<embed src=" ) !== false )
   { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
elseif ( strpos ( $html, 'feature=oembed' ) !== false )
   { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque', $html ); }
else
   { return $html; }
}
add_filter( 'embed_oembed_html', 'add_video_wmode_transparent', 10, 3);



/**
 * Add theme compatibility
 * @param array $themes - array of default compatible themes
 */
function puritan_theme_compat( $themes ){

	$themes['puritan'] = array(
		'post_type' => 'post',
		'taxonomy' 	=> false,
		'post_meta' => array(
			'embed' => 'tie_embed_code'
		),
		'post_format'	=> 'video',
		'theme_name' 	=> 'pgthrottle'
	);

	return $themes;
}
add_filter('cbc_youtube_theme_support', 'puritan_theme_compat');
/**
 * On bulk post import, set up all extra fields needed by the theme to flag post as video
 * @param int $post_id - ID of newly created post
 * @param array $video - array of video data returned by YouTube
 * @param false/array $theme_import - theme import configuration
 */
function wave_post_fields( $post_id, $video, $theme_import ){
	// check if setting is to import as theme post
	if( !$theme_import ){
		return;
	}
	// look for the plugin general settings function
	if( !function_exists('cbc_get_player_settings') ){
		return;
	}

	$player_settings = cbc_get_player_settings();

	// save the width as required by theme
	update_post_meta( $post_id, 'video_width_value', $player_settings['width'] );
	// flag post as video
	update_post_meta($post_id, 'is_video_value', true);

	// for short title, if needed, uncomment below
	//update_post_meta($post_id, 'post_title_value', $video['title']);

	// for short excerpt uncomment below
	//update_post_meta($post_id, 'post_type_value', $video['description']);

}
add_action('cbc_post_insert', 'puritan_post_fields', 10, 3);

	// check if setting is to import as theme post
if( !$theme_import ){
    return;
}

// save the width as required by theme
update_post_meta( $post_id, 'video_width_value', $player_settings['width'] );
// flag post as video
update_post_meta($post_id, 'is_video_value', true);


add_filter( 'pre_get_posts', 'non_standard_types' );
function non_standard_types( $query ) {
	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'type1', 'type2', 'type3' ) );
	return $query;
}
