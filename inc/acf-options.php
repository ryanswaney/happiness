<?php

  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
    ));

    // Add options subpage for site logos
    acf_add_options_sub_page(array(
    'page_title'  => 'Logo Settings',
    'menu_title'  => 'Logo',
    'parent_slug' => 'theme-general-settings',
    ));

  }

?>