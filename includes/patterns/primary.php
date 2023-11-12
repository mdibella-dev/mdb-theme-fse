<?php
/**
 * Block pattern: Primary
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */

namespace mdb_theme_fse;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/** Do the rendering */

ob_start();

?>
<!-- wp:html -->
<?php
wp_nav_menu( [
    'theme_location'  => 'primary',
    'container'       => 'nav',
    'container_class' => 'slideout-primary',
] );
?>
<!-- /wp:html -->
<?php

$content = ob_get_contents();
ob_end_clean();



/** Return the pattern */

return [
    'title'    => __( 'Primary Navigation', 'mdb-theme-fse' ),
    'inserter' => false,
    'content'  => $content
];
