<?php function pg_community() {
  $labels = array(
    'name'               => __( 'Community' ),
    'singular_name'      => __( 'Community' ),
    'add_new'            => __( 'Add New', 'Community Post' ),
    'add_new_item'       => __( 'Add New Community Post' ),
    'edit_item'          => __( 'Edit Community Post' ),
    'new_item'           => __( 'New Community Post' ),
    'all_items'          => __( 'All Community Posts' ),
    'view_item'          => __( 'View Community Post' ),
    'search_items'       => __( 'Search Community Posts' ),
    'not_found'          => __( 'No Community Posts found' ),
    'not_found_in_trash' => __( 'No Community Post in the trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Community'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Community',
    'public'        => true,
    'menu_icon'   => 'dashicons-admin-multisite',
    'menu_position' => 4,
	  'show_in_nav_menus' => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'community', $args );
}
add_action( 'init', 'pg_community' );
?>
