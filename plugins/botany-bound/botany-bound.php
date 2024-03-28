<?php
/*
* Plugin Name: Botany Bound
*/

function botany_bound_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'botany-bound',
        plugins_url( 'plugin.js', __FILE__ ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( plugin_dir_path( __FILE__ ) . '/plugin.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'botany_bound_enqueue_block_editor_assets' );


function botany_bound_custom_post() {
   $labels = array(
      'name'                     => __( 'Plants', 'botany_bound' ),
      'singular_name'            => __( 'Plant', 'botany_bound' ),
      'add_new'                  => __( 'Add New', 'botany_bound' ),
      'add_new_item'             => __( 'Add New Plant', 'botany_bound' ),
      'edit_item'                => __( 'Edit Plant', 'botany_bound' ),
      'new_item'                 => __( 'New Plant', 'botany_bound' ),
      'view_item'                => __( 'View Plant', 'botany_bound' ),
      'view_items'               => __( 'View Plants', 'botany_bound' ),
      'search_items'             => __( 'Search Plants', 'botany_bound' ),
      'not_found'                => __( 'No Plants found.', 'botany_bound' ),
      'not_found_in_trash'       => __( 'No Plants found in Trash.', 'botany_bound' ),
      'parent_item_colon'        => __( 'Parent Plants:', 'botany_bound' ),
      'all_items'                => __( 'All Plants', 'botany_bound' ),
      'archives'                 => __( 'Plant Archives', 'botany_bound' ),
      'attributes'               => __( 'Plant Attributes', 'botany_bound' ),
      'insert_into_item'         => __( 'Insert into Plant', 'botany_bound' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Plant', 'botany_bound' ),
      'featured_image'           => __( 'Featured Image', 'botany_bound' ),
      'set_featured_image'       => __( 'Set featured image', 'botany_bound' ),
      'remove_featured_image'    => __( 'Remove featured image', 'botany_bound' ),
      'use_featured_image'       => __( 'Use as featured image', 'botany_bound' ),
      'menu_name'                => __( 'Plants', 'botany_bound' ),
      'filter_items_list'        => __( 'Filter Plant list', 'botany_bound' ),
      'filter_by_date'           => __( 'Filter by date', 'botany_bound' ),
      'items_list_navigation'    => __( 'Plants list navigation', 'botany_bound' ),
      'items_list'               => __( 'Plants list', 'botany_bound' ),
      'item_published'           => __( 'Plant published.', 'botany_bound' ),
      'item_published_privately' => __( 'Plant published privately.', 'botany_bound' ),
      'item_reverted_to_draft'   => __( 'Plant reverted to draft.', 'botany_bound' ),
      'item_scheduled'           => __( 'Plant scheduled.', 'botany_bound' ),
      'item_updated'             => __( 'Plant updated.', 'botany_bound' ),
      'item_link'                => __( 'Plant Link', 'botany_bound' ),
      'item_link_description'    => __( 'A link to an Plant.', 'botany_bound' ),
   );
   $args = array(
      'labels'                => $labels,
      'description'           => __( 'shows vairious random plants', 'botany_bound' ),
      'public'                => false,
      'hierarchical'          => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => false,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => false,
      'show_in_admin_bar'     => false,
      'show_in_rest'          => true,
      'menu_position'         => null,
      'menu_icon'             => 'dashicons-palmtree',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'thumbnail', 'title', 'excerpt'),
      'taxonomies'            => array(),
      'has_archive'           => true,
      'rewrite'               => array( 'slug' => 'plants' ),
      'query_var'             => true,
      'can_export'            => true,
      'delete_with_user'      => false,
      'template'              => array(),
      'template_lock'         => false,
   );
   register_post_type( 'botany_bound_post', $args );
}

add_action( 'init', 'botany_bound_custom_post' );
