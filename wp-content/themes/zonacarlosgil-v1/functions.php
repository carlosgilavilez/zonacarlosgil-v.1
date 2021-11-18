<?php
/**
 * Theme Functions.
 * @package zonacarlosgil v1
 */


function zonacarlosgil_v1_enqueue_scripts(){

    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all' );

 }
 add_action('wp_enqueue_scripts', 'zonacarlosgil_v1_enqueue_scripts');