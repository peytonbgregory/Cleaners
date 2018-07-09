<?php function pg_service() {
  $labels = array(
    'name'               => __( 'Services' ),
    'singular_name'      => __( 'Service' ),
    'add_new'            => __( 'Add New', 'Service' ),
    'add_new_item'       => __( 'Add New Service' ),
    'edit_item'          => __( 'Edit Service' ),
    'new_item'           => __( 'New Service' ),
    'all_items'          => __( 'All Services' ),
    'view_item'          => __( 'View Services' ),
    'search_items'       => __( 'Search Services' ),
    'not_found'          => __( 'No Services found' ),
    'not_found_in_trash' => __( 'No Services in the trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Services'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Services',
    'public'        => true,
    'menu_position' => 4,
    'menu_icon'   => 'dashicons-tag',
	  'show_in_nav_menus' => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'has_archive'   => true,
  );
  register_post_type( 'services', $args );
}
add_action( 'init', 'pg_service' );
?>
