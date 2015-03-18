<?php

/**
 * Lift Off Utils
 *
 * @package 	WordPress
 * @subpackage 	Lift-off WP
 * @since 		Lift-off WP 0.1
 *
 * Thanks to Starkers_Utilities for these
 *
 */
 
class LO_Utils {

  /**
   * Print a pre formatted array to the browser - very useful for debugging
   *
   * @param 	array
   * @return 	void
   * @author 	Keir Whitaker
   **/
  public static function print_a( $a ) {
  	print( '<pre>' );
  	print_r( $a );
  	print( '</pre>' );
  }


  /**
   * Pass in a path and get back the page ID
   * e.g. Starkers_Utilities::get_page_id_from_path('about/terms-and-conditions');
   *
   * @param 	string 
   * @return 	integer
   * @author 	Keir Whitaker
   **/
  public static function get_page_id_from_path( $path ) {
  	$page = get_page_by_path( $path );
  	if( $page ) {
  		return $page->ID;
  	} else {
  		return null;
  	};
  }

  /**
   * Get the category id from a category name
   *
   * @param 	string 
   * @return 	string
   * @author 	Keir Whitaker
   */
  public static function get_category_id( $cat_name ){
  	$term = get_term_by( 'name', $cat_name, 'category' );
  	return $term->term_id;
  }

}