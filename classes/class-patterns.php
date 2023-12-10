<?php
namespace BigupWeb\Burley;

use WP_Block_Pattern_Categories_Registry;

/**
 * Setup block patterns.
 *
 * @package burley
 */
class Patterns {

	/**
	 * Pattern categories to be registered.
	 *
	 * @var array
	 */
	private $categories = array();

	/**
	 * Register_Patterns constructor.
	 */
	public function __construct() {
		$this->categories = array(
			'burley'   => array( 'label' => __( 'Burley Theme Patterns', 'burley' ) ),
			'bigupweb' => array( 'label' => __( 'Bigup Web Patterns', 'burley' ) ),
		);
	}


	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */
	public function register_categories() {
		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}
			register_block_pattern_category( $slug, $args );
		}
	}
}
