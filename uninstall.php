<?
/**
 * Triger this file
 * @package Shahzad
 * 
 */

 if (!defined("WP_UNINSTALL_PLUGIN")) {
     die; 
 }

 // clear database 
//  $books = get_posts(array('post_type'=>'book','numberposts'=>-1));
//  foreach ($books as $book) {
//      wp_delete_post($book->ID,true);
//  }

// accesss database via SQL
global $wpdb; 

$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'");