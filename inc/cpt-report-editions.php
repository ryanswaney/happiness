<?php

// Register CPT for WHR Edition
function register_happiness_report_edition() {

  $labels = array(
    'name'                => _x( 'Report Editions', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Report Edition', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Report Editions', 'text_domain' ),
    'name_admin_bar'      => __( 'Report Editions', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Edition', 'text_domain' ),
    'all_items'           => __( 'All Editions', 'text_domain' ),
    'add_new_item'        => __( 'Add New Edition', 'text_domain' ),
    'add_new'             => __( 'Add New', 'text_domain' ),
    'new_item'            => __( 'New Edition', 'text_domain' ),
    'edit_item'           => __( 'Edit Edition', 'text_domain' ),
    'update_item'         => __( 'Update Edition', 'text_domain' ),
    'view_item'           => __( 'View Edition', 'text_domain' ),
    'search_items'        => __( 'Search Edition', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $rewrite = array(
    'slug'                => 'ed',
    'with_front'          => false,
    'pages'               => false,
    'feeds'               => false,
  );
  $args = array(
    'label'               => __( 'report_edition', 'text_domain' ),
    'description'         => __( 'Editions of the World Happiness Report', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => false,
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'rewrite'             => $rewrite,
    'capability_type'     => 'post',
  );
  register_post_type( 'report_edition', $args );

}

// Hook into the 'init' action
add_action( 'init', 'register_happiness_report_edition', 0 );

?>