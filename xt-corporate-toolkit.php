<?php
/**
 * Plugin Name: XT Corporate Toolkit
 * Description: Custom post type functionality
 * Version: 1.0.0
 * Author: Xylus Themes
 * Author URI: http://xylusinfo.com
 * Text Domain: xylus_themes
 * License: GPLv2 or later
 */

function xt_custom_post_types(){
    $labels = array(
        'name'          => __('Clients','xylus_themes'),
        'singular_name' => __('Client','xylus_themes'),
        'add_new'       => __('Add Client','xylus_themes'),
        'add_new_item'  => __('Add Client','xylus_themes'),
        'edit_item'     => __('Edit Client','xylus_themes'),
        'menu_name'     => __('Clients','xylus_themes')
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-businessman',
        'supports'           => array( 'title')
    );
    register_post_type('clients', $args);


    $labels = array(
        'name'          => __('Team','xylus_themes'),
        'singular_name' => __('Team','xylus_themes'),
        'add_new'       => __('Add Team Member','xylus_themes'),
        'add_new_item'  => __('Add Team Member','xylus_themes'),
        'edit_item'     => __('Edit Team Member','xylus_themes'),
        'menu_name'     => __('Team','xylus_themes')
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title')
    );
    register_post_type('team', $args);

    $labels = array(
        'name'          => __('Portfolio','xylus_themes'),
        'singular_name' => __('Portfolio','xylus_themes'),
        'add_new'       => __('Add Portfolio','xylus_themes'),
        'add_new_item'  => __('Add Portfolio','xylus_themes'),
        'edit_item'     => __('Edit Portfolio','xylus_themes'),
        'menu_name'     => __('Portfolio','xylus_themes')
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'menu_position'      => null,
        'taxonomies' => array('category'),
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array( 'title','editor','thumbnail')
    );
    register_post_type('portfolio', $args);

    $labels = array(
        'name'          => __('Services','xylus_themes'),
        'singular_name' => __('Service','xylus_themes'),
        'add_new'       => __('Add Service','xylus_themes'),
        'add_new_item'  => __('Add Service','xylus_themes'),
        'edit_item'     => __('Edit Service','xylus_themes'),
        'menu_name'     => __('Services','xylus_themes')
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'capability_type'    => 'post',
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-hammer',
        'supports'           => array( 'title')
    );
    register_post_type('services', $args);
}
add_action( 'init', 'xt_custom_post_types');