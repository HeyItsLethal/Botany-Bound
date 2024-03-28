<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package botany-bound
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function botany_bound_wp_enqueue_scripts() {
	wp_enqueue_style(
		'botany-bound',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'botany_bound_wp_enqueue_scripts' );

$args = array(
    'post_type'      => 'botany_bound_post',
    'posts_per_page' => 2,
    'orderby'        => 'date',
    'order'          => 'DESC',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
    }
    wp_reset_postdata();
}