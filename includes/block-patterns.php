<?php
/**
 * Additional setup for the block patterns.
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */

namespace mdb_theme_fse;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * Registers block patterns.
 *
 * @since 1.0.0
 */

function register_block_patterns()
{
    $block_patterns = array(
        'slideout',
        '404',
    );

    foreach( $block_patterns as $block_pattern ) :
        $pattern_file = get_theme_file_path( '/includes/patterns/' . $block_pattern . '.php' );

        register_block_pattern(
            'mdb-theme-fse/' . $block_pattern,
            require $pattern_file
        );
    endforeach;
}

add_action( 'init', 'mdb_theme_fse\register_block_patterns', 9 );
