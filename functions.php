<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

 function twentyse(){
	wp_enqueue_style( 'style', get_stylesheet_uri( '/style.css' ), array(), '1.0.0' );
	wp_enqueue_style( 'responsive', get_stylesheet_uri( '/responsive.css' ), array(), '1.0.0' );
	
 }
 
 add_action( 'wp_enqueue_scripts', 'twentyse' );
 
 
 register_nav_menus(array(
	'primary' => __('Primary Menus'),
	'Footer' => __('Footer Menus'),
 ));
 
 
 
 
 
 
 
 
 
 
 
 