<?php function pg_mission() {
  $labels = array(
    'name'               => __( 'Missions' ),
    'singular_name'      => __( 'Mission' ),
    'add_new'            => __( 'Add New', 'Mission' ),
    'add_new_item'       => __( 'Add New Mission' ),
    'edit_item'          => __( 'Edit Mission' ),
    'new_item'           => __( 'New Mission' ),
    'all_items'          => __( 'All Missions' ),
    'view_item'          => __( 'View Missions' ),
    'search_items'       => __( 'Search Missions' ),
    'not_found'          => __( 'No Missions found' ),
    'not_found_in_trash' => __( 'No Missions in the trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Missions'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Missions',
    'public'        => true,
    'menu_position' => 4,
    'menu_icon'   => 'dashicons-admin-site',
	  'show_in_nav_menus' => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'mission', $args );
}
add_action( 'init', 'pg_mission' );
?>
