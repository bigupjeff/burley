<?php
namespace BigupWeb\Burley;

/**
 * Burley Theme Entry.
 *
 * @package burley
 * @author Jefferson Real <me@jeffersonreal.uk>
 * @copyright Copyright 2023 Jefferson Real
 */

// Set global constants.
define( 'BURLEY_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
define( 'BURLEY_PATH', trailingslashit( __DIR__ ) );
define( 'BURLEY_URL', trailingslashit( get_site_url( null, strstr( __DIR__, '/wp-content/' ) ) ) );

// Setup PHP namespace.
require_once BURLEY_PATH . 'classes/autoload.php';

// Setup the plugin.
$Theme_Setup = new Theme_Setup();
$Theme_Setup->all();
