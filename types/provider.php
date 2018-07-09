<?php function pg_providers() {
  $labels = array(
    'name'               => __( 'Providers' ),
    'singular_name'      => __( 'Provider' ),
    'add_new'            => __( 'Add New' ),
    'add_new_item'       => __( 'Add New Provider'),
    'edit_item'          => __( 'Edit Provider' ),
    'new_item'           => __( 'New Provider' ),
    'all_items'          => __( 'All Providers' ),
    'view_item'          => __( 'View Provider' ),
    'search_items'       => __( 'Search Providers' ),
    'not_found'          => __( 'No Providers found' ),
    'not_found_in_trash' => __( 'No Providers in the trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Providers'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Providers',
    'public'        => true,
    'menu_icon'   => 'dashicons-businessman',
    'menu_position' => 4,
	  'show_in_nav_menus' => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'provider', $args );
}
add_action( 'init', 'pg_providers' );
?>
