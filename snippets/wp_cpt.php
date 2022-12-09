<?php
function seo_paginas() {

    $labels = array(
            'name'                  => 'SEO Pagina\'s',
    'singular_name'         => 'SEO Pagina',
    'menu_name'             => 'SEO Pagina\'s',
    'name_admin_bar'        => 'Post Type',
    'archives'              => 'Item Archives',
    'attributes'            => 'Item Attributes',
    'parent_item_colon'     => 'Parent Item:',
    'all_items'             => 'All Items',
    'add_new_item'          => 'Nieuwe SEO Pagina',
    'add_new'               => 'Nieuwe SEO Pagina',
    'new_item'              => 'Nieuwe SEO Pagina',
    'edit_item'             => 'Bewerk SEO Pagina',
    'update_item'           => 'Update SEO Pagina',
    'view_item'             => 'Bekijk SEO Pagina',
    'view_items'            => 'Bekijk alle SEO Pagina\'s',
    'search_items'          => 'Search Item',
    'not_found'             => 'SEO Pagina niet gevonden',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Featured Image',
    'set_featured_image'    => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into item',
    'uploaded_to_this_item' => 'Uploaded to this item',
    'items_list'            => 'Items list',
    'items_list_navigation' => 'Items list navigation',
    'filter_items_list'     => 'Filter items list',
    );
    $rewrite = array(
            'slug'                  => 'meer-informatie',
    'with_front'            => true,
    'pages'                 => true,
    'feeds'                 => true,
    );
    $args = array(
            'label'                 => 'SEO Pagina',
    'description'           => 'CPT voor SEO pagina\'s',
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'revisions' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-admin-page',
    'show_in_admin_bar'     => false,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => 'meer-onformatie',
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'rewrite'               => $rewrite,
    'capability_type'       => 'page',
    );

    register_post_type( 'seo_page', $args );
}

add_action( 'init', 'seo_paginas', 0 );