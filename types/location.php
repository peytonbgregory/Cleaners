<?php function pg_location() {
  $labels = array(
    'name'               => __( 'Locations' ),
    'singular_name'      => __( 'Location' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New Location' ),
    'edit_item'          => __( 'Edit Location' ),
    'new_item'           => __( 'New Location' ),
    'all_items'          => __( 'All locations' ),
    'view_item'          => __( 'View locations' ),
    'search_items'       => __( 'Search locations' ),
    'not_found'          => __( 'No locations found' ),
    'not_found_in_trash' => __( 'No locations in the trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Locations'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'locations',
    'public'        => true,
    'menu_icon'   => 'dashicons-location-alt',
    'menu_position' => 4,
	  'show_in_nav_menus' => true,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
  );
  register_post_type( 'locations', $args );
}
add_action( 'init', 'pg_location' );
?>
