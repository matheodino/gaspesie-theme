<?php function cptui_register_my_taxes() {

/**
 * Taxonomy: Catégories ESP.
 */

$labels = [
    "name" => __( "Catégories ESP", "gaspesie" ),
    "singular_name" => __( "Catégorie ESP", "gaspesie" ),
];


$args = [
    "label" => __( "Catégories ESP", "gaspesie" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'esp', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "esp",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "esp", [ "projet" ], $args );

/**
 * Taxonomy: Langues.
 */

$labels = [
    "name" => __( "Langues", "gaspesie" ),
    "singular_name" => __( "Langue", "gaspesie" ),
];


$args = [
    "label" => __( "Langues", "gaspesie" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'langues', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "langues",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "langues", [ "projet" ], $args );

/**
 * Taxonomy: Contextes.
 */

$labels = [
    "name" => __( "Contextes", "gaspesie" ),
    "singular_name" => __( "Contexte", "gaspesie" ),
];


$args = [
    "label" => __( "Contextes", "gaspesie" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'contexte', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "contexte",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "contexte", [ "projet" ], $args );

/**
 * Taxonomy: Types.
 */

$labels = [
    "name" => __( "Types", "gaspesie" ),
    "singular_name" => __( "Type", "gaspesie" ),
];


$args = [
    "label" => __( "Types", "gaspesie" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'type1', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => false,
    "rest_base" => "type1",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "rest_namespace" => "wp/v2",
    "show_in_quick_edit" => false,
    "sort" => false,
    "show_in_graphql" => false,
];
register_taxonomy( "type1", [ "projet" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
