<?php

// Video Taxonomy
function pg_video() {
  $labels = array(
    'name'               => __( 'Videos' ),
    'singular_name'      => __( 'Videos' ),
    'add_new'            => __( 'Add New', 'Video' ),
    'add_new_item'       => __( 'Add New Video' ),
    'edit_item'          => __( 'Edit Video' ),
    'new_item'           => __( 'New Video' ),
    'all_items'          => __( 'All Videos' ),
    'view_item'          => __( 'View Videos' ),
    'search_items'       => __( 'Search Videos' ),
    'not_found'          => __( 'No Videos found' ),
    'not_found_in_trash' => __( 'No Videos in the trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Videos'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Videos',
    'public'        => true,
    'menu_position' => 4,
    'menu_icon'   => 'dashicons-video-alt2',
	'show_in_nav_menus' => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'thumbnail' ),
	'taxonomies' => array('filter_tag', 'category'),
    'has_archive'   => true,
  );
  register_post_type( 'video', $args );
}
add_action( 'init', 'pg_video' );
?>