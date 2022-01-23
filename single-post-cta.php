<?php

/**
 * Plugin Name:     Single Post CTA
 * Plugin URI:      https://github.com/millerbrook/single-post-cta
 * Description:     Adds sidebar (widget area) to single posts
 * Version:         0.1
 * Author:          Brook Miller
 * Author URI:      https://cbrookmiller.com
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     spc
 */

 // Don't let hook be called directly
 if ( !defined( 'ABSPATH' ) ) {
    die;
 }

 /**
  * Load stylesheet
  */
 function spc_load_stylesheet() {
    if( is_single()) {
     wp_enqueue_style('spc_styles', plugin_dir_url(__FILE__) . 'spc_styles.css');
 }
}

 // Hook stylesheet
 add_action('wp_enqueue_scripts', 'spc_load_stylesheet');

 function spc_register_sidebar() {
     register_sidebar( array(
        'name'          => __( 'Single Post CTA', 'spc' ),
        'id'            => 'spc-sidebar',
        'description'   => __( 'Displays widget area on single posts', 'spc' ),
        'before_widget' => '<div class="widget spc">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle spc-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );
 }

 ?>