<?php function pg_testimonial() {
  $labels = array(
    'name'               => __( 'Testimonials' ),
    'singular_name'      => __( 'Testimonial' ),
    'add_new'            => __( 'Add New', 'Testimonial' ),
    'add_new_item'       => __( 'Add New Testimonial' ),
    'edit_item'          => __( 'Edit Testimonial' ),
    'new_item'           => __( 'New Testimonial' ),
    'all_items'          => __( 'All Testimonials' ),
    'view_item'          => __( 'View Testimonials' ),
    'search_items'       => __( 'Search Testimonials' ),
    'not_found'          => __( 'No Testimonials found' ),
    'not_found_in_trash' => __( 'No Testimonials in the trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Testimonials'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Testimonials',
    'public'        => true,
    'menu_position' => 4,
    'menu_icon'   => 'dashicons-format-quote',
	  'show_in_nav_menus' => true,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'has_archive'   => true,
  );
  register_post_type( 'testimonial', $args );
}
add_action( 'init', 'pg_testimonial' );
?>
