wp.domReady( () => {

    /** core/image */

    wp.blocks.unregisterBlockStyle(
        'core/image',
        [
            'rounded'
        ]
    );

    wp.blocks.registerBlockStyle(
        'core/image',
        [
            {
                name: 'shaded',
                label: 'Schattiert',
                isDefault: false,
            },
            {
                name: 'transparent',
                label: 'Transparent',
                isDefault: false,
            }
        ]
    );


    /** core/embed */

    wp.blocks.registerBlockStyle(
        'core/embed',
        [
            {
                name: 'shaded',
                label: 'Schattiert',
                isDefault: false,
            }
        ]
    );

    // Remove unused block variations
    // Current block manager plugins are failing
    wp.blocks.unregisterBlockVariation( 'core/embed', 'instagram' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'soundcloud' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'spotify' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'flickr' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'animoto' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'cloudup' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'collegehumor' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'crowdsignal' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'imgur' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'kickstarter' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'mixcloud' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'reverbnation' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'screencast' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'scribd' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'speaker-deck' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'smugmug' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'tiktok' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'ted' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'tumblr' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'videopress' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'wordpress' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'wordpress-tv' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'amazon-kindle' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'wolfram-cloud' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'issuu' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'pocketcasts' );
    wp.blocks.unregisterBlockVariation( 'core/embed', 'dailymotion' );


    /** core/heading */

    wp.blocks.registerBlockStyle(
        'core/heading',
        [
            {
                name: 'section',
                label: 'Abschnitt',
                isDefault: false,
            },
            {
                name: 'section-large',
                label: 'Abschnitt (groß)',
                isDefault: false,
            }
        ]
    );


    /** core/paragraph */

    wp.blocks.registerBlockStyle(
        'core/paragraph',
        {
            name: 'smallnote',
            label: 'Hinweiszeile',
            isDefault: false,
        }
    );



    /** core/navigation */

    wp.blocks.registerBlockStyle(
        'core/navigation',
        {
            name: 'pagenavigation',
            label: 'Beitragsnavigation',
            isDefault: false,
        }
    );



    /** core/button */

    wp.blocks.unregisterBlockStyle(
        'core/button',
        [
            'fill',
            'outline',
        ]
    );

    wp.blocks.registerBlockStyle(
        'core/button',
        [
            {
                name: 'default',
                label: 'Standard',
                isDefault: true,
            },
            {
                name: 'flat',
                label: 'Flat',
                isDefault: false,
            }
        ]
    );
} );
