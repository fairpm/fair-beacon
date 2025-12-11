<?php
/**
 * Plugin Name: FAIR Beacon
 * Description: Create your own FAIR node.
 * Version: 0.1
 * Author: FAIR Contributors
 * Author URI: https://fair.pm
 * Security: security@fair.pm
 * License: GPLv2
 * Requires at least: 6.4
 * Requires PHP: 8.3
 * Text Domain: fair-beacon
 */

namespace FAIR\Beacon;

require __DIR__ . '/inc/namespace.php';
require __DIR__ . '/inc/admin/namespace.php';
require __DIR__ . '/inc/api/namespace.php';
require __DIR__ . '/inc/git-updater/namespace.php';
require __DIR__ . '/inc/keys/namespace.php';
require __DIR__ . '/inc/plc/namespace.php';
require __DIR__ . '/inc/plc/util.php';

// We may already be autoloaded in a composer based setup such as Bedrock, so avoid duplicates if so
if ( ! interface_exists( FAIR\Beacon\Provider::class ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

bootstrap();
