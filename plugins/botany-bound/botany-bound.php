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

