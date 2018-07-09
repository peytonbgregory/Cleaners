<?php function pg_career() {
  $labels = array(
    'name'               => __( 'Careers' ),
    'singular_name'      => __( 'Career' ),
    'add_new'            => __( 'Add New', 'Career' ),
    'add_new_item'       => __( 'Add New Career' ),
    'edit_item'          => __( 'Edit Career' ),
    'new_item'           => __( 'New Career' ),
    'all_items'          => __( 'All Careers' ),
    'view_item'          => __( 'View Careers' ),
    'search_items'       => __( 'Search Careers' ),
    'not_found'          => __( 'No Careers found' ),
    'not_found_in_trash' => __( 'No Careers in the trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Careers'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Careers',
    'public'        => true,
    'menu_position' => 4,
    'menu_icon'   => 'dashicons-tag',
	  'show_in_nav_menus' => true,
    'supports'      => array( 'title', 'editor' ),
    'has_archive'   => true,
  );
  register_post_type( 'career', $args );
}
add_action( 'init', 'pg_career' );
?>
