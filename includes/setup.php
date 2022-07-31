<?php
/**
 * Main functions for setting up the theme.
 *
 * @author  Marco Di Bella <mdb@marcodibella.de>
 * @package mdb-theme-fse
 */


defined( 'ABSPATH' ) or exit;



if( ! function_exists( 'mdb_after_setup_theme' ) ) :

    /**
     * Performs basic settings for the theme.
     *
     * @since 1.0.0
     */

     function mdb_after_setup_theme()
     {
        // Enables internationalization.
        load_theme_textdomain( 'mdb', get_template_directory() . '/languages' );

        // Adds support for the block editor (Gutenberg).
        add_theme_support( 'align-wide' );

        //add_editor_style( 'assets/build/css/editor-styles.min.css' );

        // Sets media sizes.
        if( 320 !== get_option( 'thumbnail_size_w' ) ) :
            update_option( 'thumbnail_size_w', 320 );
            update_option( 'thumbnail_size_h', 9999 );
            update_option( 'thumbnail_crop', 0 );
        endif;

        if( 640 !== get_option( 'medium_size_w' ) ) :
            update_option( 'medium_size_w', 640 );
            update_option( 'medium_size_h', 9999 );
        endif;

        if( 1200 !== get_option( 'large_size_w' ) ) :
            update_option( 'large_size_w', 1200 );
            update_option( 'large_size_h', 9999 );
        endif;
    }

    add_action( 'after_setup_theme', 'mdb_after_setup_theme' );

endif;



/**
 * (Un)loads a set of necessary JS scripts and stylesheets.
 *
 * @since 1.0.0
 */

function mdb_enqueue_scripts()
{
    /**
     * Registers and loads vendor styles and scripts.
     */

    wp_register_script(
        'jquery-ui',
        get_template_directory_uri() . '/assets/build/js/jquery.easing.min.js',
        array( 'jquery' ),
        false,
        true
    );
    wp_enqueue_script( 'jquery-ui' );


    /**
     * Registers and loads the theme's own styles and scripts.
     *
     * Note: The style.css in the main directory is only used for theme identification and versioning.
     * Actually the (compressed) style information can be found in frontend(.min).css.
     */

    wp_enqueue_style(
        'mdb-theme-fse',
        get_template_directory_uri() . '/assets/build/css/style-frontend.min.css',
        array()
    );

    if( defined( 'MDB_DEV' ) and ( true === MDB_DEV ) ):
        wp_enqueue_script(
            'mdb-theme-fse',
            get_template_directory_uri() . '/assets/src/js/frontend.js',
            array( 'jquery' ),
            false,
            true
        );
    else :
        wp_enqueue_script(
            'mdb-theme-fse',
            get_template_directory_uri() . '/assets/build/js/frontend.min.js',
            'jquery',
            false,
            true
        );
    endif;
}

add_action( 'wp_enqueue_scripts', 'mdb_enqueue_scripts', 9999 );




/**
 * Adds the favicon.
 *
 * @since  1.8.0
 * @param  array $meta_tags    The meta tags generated by WordPress.
 * @return array               The modified meta tags.
 */

function mdb_site_icon_meta_tags( $meta_tags )
{
    $icon_svg = get_template_directory_uri() . '/assets/build/img/marco-logo.svg';
    $icon_512 = get_template_directory_uri() . '/assets/build/img/marco-logo-512.png';
    $icon_192 = get_template_directory_uri() . '/assets/build/img/marco-logo-192.png';

    $meta_tags   = array();
    $meta_tags[] = sprintf( '<link rel="icon" href="%s">', esc_url( $icon_512 ) );
    $meta_tags[] = sprintf( '<link rel="shortcut icon" href="%s">', esc_url( $icon_svg ) );
    $meta_tags[] = sprintf( '<link rel="apple-touch-icon" href="%s">', esc_url( $icon_192 ) );
    $meta_tags[] = sprintf( '<meta name="msapplication-TileImage" content="%s">', esc_url( $icon_192 ) );

    return $meta_tags;
}

add_filter( 'site_icon_meta_tags', 'mdb_site_icon_meta_tags' );



/**
 * Send correct "favicon.ico" redirect.
 *
 * @since 1.8.0
 * @see   https://make.wordpress.org/core/2020/02/19/enhancements-to-favicon-handling-in-wordpress-5-4/
 */

function mdb_do_faviconico()
{
    $icon_svg = get_template_directory_uri() . '/assets/build/img/marco-logo.svg';

    wp_redirect( $icon_svg );
 	exit;
}

add_action( 'do_faviconico', 'mdb_do_faviconico' );
