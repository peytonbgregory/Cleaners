<?phpdefine("THEME_DIR", get_template_directory_uri());// Register Custom Navigation Walkerrequire_once ('includes/foundation-walker-top.php');require_once ('includes/foundation-walker-drill.php');// ENQUEUE SCRIPTSfunction pgthrottle_scripts() {	wp_register_script('foundation', THEME_DIR . '/dist/js/foundation.min.js','jquery','',false);	wp_register_script('slick', THEME_DIR . '/dist/js/slick.min.js','jquery',1.11,true);	wp_register_script('gmaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD08kc3D9TVd1_-Y7LoeLEf18SuVQoeAsQ','','',false);	wp_register_script('footer-scripts', THEME_DIR . '/dist/js/scripts.js',null,null,true);		wp_enqueue_script(array('jquery','foundation','slick','gmaps','footer-scripts'));			wp_register_style('screen-css', THEME_DIR . '/stylesheets/screen.css', '', '','all');	wp_register_style('motion', THEME_DIR . '/dist/css/motion-ui.css', '', '','all');	wp_register_style('icons-css', THEME_DIR . '/fonts/foundation-icons.css', '', '','all');	wp_register_style('style-css', THEME_DIR . '/style.css', '', '','all');	wp_enqueue_style(array('screen-css', 'motion', 'icons-css', 'style-css'));}add_action('wp_enqueue_scripts','pgthrottle_scripts');add_theme_support('post-thumbnails');// Custom Thumbnailsadd_image_size( 'staff-thumbnail', 150, 150, true );add_image_size( 'staff-thumbnail-crop', 150, 150 );// Register Custom Menusfunction pgthrottle_register_menus() {	register_nav_menus( array (     'header-menu' => 'Header Menu',     'footer-menu' => 'Footer Menu'     )  );}add_action( 'after_setup_theme', 'pgthrottle_register_menus' );// Community Custom Post Typefunction pg_community() {  $labels = array(    'name'               => __( 'Community' ),    'singular_name'      => __( 'Community' ),    'add_new'            => __( 'Add New', 'Community Post' ),    'add_new_item'       => __( 'Add New Community Post' ),    'edit_item'          => __( 'Edit Community Post' ),    'new_item'           => __( 'New Community Post' ),    'all_items'          => __( 'All Community Posts' ),    'view_item'          => __( 'View Community Post' ),    'search_items'       => __( 'Search Community Posts' ),    'not_found'          => __( 'No Community Posts found' ),    'not_found_in_trash' => __( 'No Community Post in the trash' ),    'parent_item_colon'  => '',    'menu_name'          => 'Community'  );  $args = array(    'labels'        => $labels,    'description'   => 'Community',    'public'        => true,    'menu_icon'   => 'dashicons-admin-multisite',    'menu_position' => 4,	  'show_in_nav_menus' => true,    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),    'has_archive'   => true,  );  register_post_type( 'community', $args );}add_action( 'init', 'pg_community' );// Locations Cuastom Post Typefunction pg_location() {  $labels = array(    'name'               => __( 'Locations' ),    'singular_name'      => __( 'Location' ),    'add_new'            => __( 'Add New' ),    'add_new_item'       => __( 'Add New Location' ),    'edit_item'          => __( 'Edit Location' ),    'new_item'           => __( 'New Location' ),    'all_items'          => __( 'All locations' ),    'view_item'          => __( 'View locations' ),    'search_items'       => __( 'Search locations' ),    'not_found'          => __( 'No locations found' ),    'not_found_in_trash' => __( 'No locations in the trash' ),    'parent_item_colon'  => '',    'menu_name'          => 'Locations'  );  $args = array(    'labels'        => $labels,    'description'   => 'locations',    'public'        => true,    'menu_icon'   => 'dashicons-location-alt',    'menu_position' => 4,	  'show_in_nav_menus' => true,    'supports'      => array( 'title', 'editor', 'thumbnail' ),    'has_archive'   => true,  );  register_post_type( 'locations', $args );}add_action( 'init', 'pg_location' );//Services Custom Post Typefunction pg_service() {  $labels = array(    'name'               => __( 'Services' ),    'singular_name'      => __( 'Service' ),    'add_new'            => __( 'Add New', 'Service' ),    'add_new_item'       => __( 'Add New Service' ),    'edit_item'          => __( 'Edit Service' ),    'new_item'           => __( 'New Service' ),    'all_items'          => __( 'All Services' ),    'view_item'          => __( 'View Services' ),    'search_items'       => __( 'Search Services' ),    'not_found'          => __( 'No Services found' ),    'not_found_in_trash' => __( 'No Services in the trash' ),    'parent_item_colon'  => '',    'menu_name'          => 'Services'  );  $args = array(    'labels'        => $labels,    'description'   => 'Services',    'public'        => true,    'menu_position' => 4,    'menu_icon'   => 'dashicons-tag',	  'show_in_nav_menus' => true,    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),    'has_archive'   => true,  );  register_post_type( 'services', $args );}add_action( 'init', 'pg_service' );// Video Taxonomyfunction pg_video() {  $labels = array(    'name'               => __( 'Videos' ),    'singular_name'      => __( 'Videos' ),    'add_new'            => __( 'Add New', 'Video' ),    'add_new_item'       => __( 'Add New Video' ),    'edit_item'          => __( 'Edit Video' ),    'new_item'           => __( 'New Video' ),    'all_items'          => __( 'All Videos' ),    'view_item'          => __( 'View Videos' ),    'search_items'       => __( 'Search Videos' ),    'not_found'          => __( 'No Videos found' ),    'not_found_in_trash' => __( 'No Videos in the trash' ),    'parent_item_colon'  => '',    'menu_name'          => 'Videos'  );  $args = array(    'labels'        => $labels,    'description'   => 'Videos',    'public'        => true,    'menu_position' => 4,    'menu_icon'   => 'dashicons-video-alt2',	'show_in_nav_menus' => true,    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'thumbnail' ),	'taxonomies' => array('filter_tag', 'category'),    'has_archive'   => true,  );  register_post_type( 'video', $args );}add_action( 'init', 'pg_video' );// Function Helperfunction pg_class_loop() {    global $wp_query;    $loop = 'template-type-notfound';    if ( $wp_query->is_page ) {        $loop = is_front_page() ? 'template-type-front' : 'template-type-page';    } elseif ( $wp_query->is_home ) {        $loop = 'template-type-home';    } elseif ( $wp_query->is_single ) {        $loop = ( $wp_query->is_attachment ) ? 'template-type-attachment' : 'template-type-single';    } elseif ( $wp_query->is_category ) {        $loop = 'template-type-category';    } elseif ( $wp_query->is_tag ) {        $loop = 'template-type-tag';    } elseif ( $wp_query->is_tax ) {        $loop = 'template-type-tax';    } elseif ( $wp_query->is_archive ) {        if ( $wp_query->is_day ) {            $loop = 'template-type-day';        } elseif ( $wp_query->is_month ) {            $loop = 'template-type-month';        } elseif ( $wp_query->is_year ) {            $loop = 'template-type-year';        } elseif ( $wp_query->is_author ) {            $loop = 'template-type-author';        } else {            $loop = 'template-type-archive';        }    } elseif ( $wp_query->is_search ) {        $loop = 'template-type-search';    } elseif ( $wp_query->is_404 ) {        $loop = 'template-type-notfound';    }    return $loop;}/* Register our sidebars and widgetized areas. */function pgthrottle_widgets_init() {	register_sidebar( array(		'name'          => 'Primary Sidebar',		'id'            => 'primary',		'before_widget' => '<div id="%1$s" class="widget sidebar-widget %2$s">',		'after_widget'  => '</div>',		'before_title'  => '<h4 class="widget-title">',		'after_title'   => '</h4>',	) );	register_sidebar( array(		'name'          => 'Footer : First',		'id'            => 'footer-first',		'before_widget' => '<div id="%1$s" class="widget footer-widget cell %2$s small-12 medium-6 large-3">',		'after_widget'  => '</div>',		'before_title'  => '<h4 class="widget-title">',		'after_title'   => '</h4>',	) );  register_sidebar( array(		'name'          => 'Footer : Second',		'id'            => 'footer-second',		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s cell small-12 medium-6 large-3">',		'after_widget'  => '</div>',		'before_title'  => '<h4 class="widget-title">',		'after_title'   => '</h4>',	) );  register_sidebar( array(		'name'          => 'Footer : Third',		'id'            => 'footer-third',		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s cell small-12 medium-6 large-3">',		'after_widget'  => '</div>',		'before_title'  => '<h4 class="widget-title">',		'after_title'   => '</h4>',	) );  register_sidebar( array(		'name'          => 'Footer : Fourth',		'id'            => 'footer-fourth',		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s cell small-12 medium-6 large-3">',		'after_widget'  => '</div>',		'before_title'  => '<h4 class="widget-title">',		'after_title'   => '</h4>',	) );}add_action( 'widgets_init', 'pgthrottle_widgets_init' ); function auto_copyright($year = 'auto'){ 	 if(intval($year) == 'auto'){ $year = date('Y'); }   if(intval($year) == date('Y')){ echo '&copy;'; echo intval($year); }  if(intval($year) < date('Y')){ echo '&copy;'; echo intval($year) . ' - ' . date('Y'); }  if(intval($year) > date('Y')){ echo '&copy;'; echo date('Y'); } } // Enable shortcodes in widgetsadd_filter('widget_text', 'do_shortcode');function pgthrottle_subcategory_hierarchy() {    $category = get_queried_object();    $parent_id = $category->category_parent;    $templates = array();    if ( $parent_id == 0 ) {        // Use default values from get_category_template()        $templates[] = "category-{$category->slug}.php";        $templates[] = "category-{$category->term_id}.php";        $templates[] = 'category.php';    } else {        // Create replacement $templates array        $parent = get_category( $parent_id );        // Current first        $templates[] = "category-{$category->slug}.php";        $templates[] = "category-{$category->term_id}.php";        // Parent second        $templates[] = "category-{$parent->slug}.php";        $templates[] = "category-{$parent->term_id}.php";        $templates[] = 'category.php';    }    return locate_template( $templates );}add_filter( 'category_template', 'pgthrottle_subcategory_hierarchy' );add_filter( 'breadcrumbs_template', 'pgthrottle_breadcrumbs' );function pgthrottle_breadcrumbs() {	$delimiter = '';	$home = 'Home';	$before = '<li>';	$after = '</li>';	if (!is_home() && !is_front_page() || is_paged()) {		echo '<nav role="navigation" id="breadcrumbs"><div class="grid-container"><ul class="breadcrumbs">';		global $post;		$homeLink = get_bloginfo('url');		echo '<li><a href="' . $homeLink . '">' . $home . $delimiter . '</a></li> ';		if (is_category()) {			global $wp_query;			$cat_obj = $wp_query->get_queried_object();			$thisCat = $cat_obj->term_id;			$thisCat = get_category($thisCat);			$parentCat = get_category($thisCat->parent);			if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));			echo $before . single_cat_title('', false) . $after;		} elseif (is_day()) {			echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . $delimiter . '</a></li> ';			echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . $delimiter . '</a></li> ';			echo $before . get_the_time('d') . $after;		} elseif (is_month()) {			echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . $delimiter . '</a></li> ' ;			echo $before . get_the_time('F') . $after;		} elseif (is_year()) {			echo $before . get_the_time('Y') . $after;		} elseif (is_single() && !is_attachment()) {			if ( get_post_type() != 'post' ) {				$post_type = get_post_type_object(get_post_type());				$slug = $post_type->rewrite;				echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . $delimiter . '</a></li> ';				echo $before . get_the_title() . $after;			} else {				$cat = get_the_category(); $cat = $cat[0];				echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');				echo $before . get_the_title() . $after;			}		} elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {			$post_type = get_post_type_object(get_post_type());			echo $before . $post_type->labels->singular_name . $after;		} elseif (is_attachment()) {			$parent = get_post($post->post_parent);			$cat = get_the_category($parent->ID); $cat = $cat[0];			echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');			echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . $delimiter . '</a></li> ';			echo $before . get_the_title() . $after;		} elseif ( is_page() && !$post->post_parent ) {			echo $before . get_the_title() . $after;		} elseif ( is_page() && $post->post_parent ) {			$parent_id  = $post->post_parent;			$breadcrumbs = array();			while ($parent_id) {				$page = get_page($parent_id);				$breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';				$parent_id  = $page->post_parent;			}			$breadcrumbs = array_reverse($breadcrumbs);			foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';			echo $before . get_the_title() . $after;		} elseif ( is_search() ) {			echo $before . 'Search results for "' . get_search_query() . '"' . $after;		} elseif ( is_tag() ) {			echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;		} elseif ( is_author() ) {			global $author;			$userdata = get_userdata($author);			echo $before . 'Articles posted by ' . $userdata->display_name . $after;		} elseif ( is_404() ) {			echo $before . 'Error 404' . $after;		}		if ( get_query_var('paged') ) {			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';			echo ': ' . __('Page') . ' ' . get_query_var('paged');			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';		}		echo '</ul></div></nav>';	}}function my_acf_google_map_api( $api ){		$api['key'] = 'AIzaSyD08kc3D9TVd1_-Y7LoeLEf18SuVQoeAsQ';		return $api;	}add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');if( function_exists('acf_add_options_page') ) {	acf_add_options_page(array(		'page_title' 	=> 'Theme Settings',		'menu_title'	=> 'Theme Settings',		'menu_slug' 	=> 'theme-general-settings',		'capability'	=> 'edit_posts',    'menu_icon'   => 'dashicons-admin-settings',		'redirect'		=> false	));}/////////////////////////////// Puritan old setting end ///////////////////////////////// Declare theme compatible with YouTube Video Import pluginadd_filter( 'cbc_compatibility', '__return_true' );/** * Set theme post type to post * @return string - the post type to import videos in */function theme_post_type(){	return 'video';}add_filter( 'cbc_compatibility_post_type', 'theme_post_type' );/** * Instruct plugin to fill custom field with video URL * @return string - the custom field name */function post_yt_url_meta(){	return 'video_url';}add_filter( 'cbc_compatibility_url_meta', 'post_yt_url_meta' );