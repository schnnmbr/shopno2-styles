<?php
/*
Plugin Name: Shopno2 Styles
Plugin URI: http://shopno2.com
Description: Styles for shopno2 sites. Styles are enqueued to be used inside posts.
Author: sachin nambiar
Author URI: shopno2.com
Version: 0.1
*/

function s2styles() {
        /** Enqueue Style Sheets */
        // Only enqueue if available
        if ( is_readable( plugin_dir_path( __FILE__ ) . 's2styles.css' ) ) {
            wp_enqueue_style( 's2-styles', plugin_dir_url( __FILE__ ) . 's2styles.css', array(), '0.1', 'screen' );
        }
}
add_action( 'wp_enqueue_scripts', 's2styles' );