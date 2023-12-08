<?php
// ==========================================================================
//  Website
// ==========================================================================
add_action( 'init', 'cptui_register_my_cpts_job' );
function cptui_register_my_cpts_job() {
  $labels = array(
    "name"          => __( 'Services', '' ),
    "singular_name" => __( 'Service', '' ),
  );
  $args   = array(
    "label"               => __( 'Service', '' ),
    "labels"              => $labels,
    "description"         => "",
    "public"              => true,
    "publicly_queryable"  => true,
    "show_ui"             => true,
    "show_in_rest"        => false,
    "rest_base"           => "",
    "has_archive"         => true,
    "show_in_menu"        => true,
    "show_in_nav_menus"   => true,
    "exclude_from_search" => false,
    "capability_type"     => "post",
    "map_meta_cap"        => true,
    "hierarchical"        => false,
    "rewrite"             => array( "slug" => "services", "with_front" => true ),
    "query_var"           => true,
    "menu_position"       => 3,
    "menu_icon"           => "dashicons-text-page",
    "supports"            => array( "title", "editor", "thumbnail" ),
  );
  register_post_type( "service", $args );
}

//end of file
