<?php

/*
Plugin Name: RR Admin Theme
Plugin URI: https://github.com/renrizzolo
Description: Just a Wordpress admin theme.
Author: Ren Rizzolo
Version: 1.0
Author URI: https://github.com/renrizzolo
*/

// wp_admin_css_color(
//   'rr',
//   __('rr'),
//   plugin_dir_url( __FILE__ ) . '/css/rr-admin-theme.css',
//   array('#07273E', '#435e94', '#ededed', '#ea2265'),
//   array( 'base' => '#e5f8ff', 'focus' => '#fff', 'current' => '#fff' )
// );

function rr_admin_theme_style() {
    wp_enqueue_style('admin-theme', plugin_dir_url( __FILE__ ) . '/css/rr-admin-theme.css');
}
add_action('admin_enqueue_scripts', 'rr_admin_theme_style');

?>