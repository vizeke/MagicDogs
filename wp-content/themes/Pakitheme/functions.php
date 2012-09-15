<?php
/**
 * Twenty Eleven functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, twentyeleven_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package MagicDogs
 * @subpackage Pakitheme
 * @since 0.1
 */
 
 /*Funções personalizadas Exemplo*/
function add_myjavascript(){  
    wp_enqueue_script( 'ajax-implementation.js', get_bloginfo('template_directory') . "/Resources/js/ajax-implementation.js", array( 'jquery' ) );  
}  
add_action( 'init', 'add_myjavascript' );  
  
function MyAjaxFunction(){  
    //get the data from ajax() call  
    $GreetingAll = $_POST['GreetingAll'];  
    $results = "<h2>".$GreetingAll."</h2>";  
    // Return the String  
    die($results);  
}  
// creating Ajax call for WordPress  
add_action( 'wp_ajax_nopriv_MyAjaxFunction', 'MyAjaxFunction' );  
add_action( 'wp_ajax_MyAjaxFunction', 'MyAjaxFunction' );

