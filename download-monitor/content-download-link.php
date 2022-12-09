<?php
/**
 * Simple download links.
 * Custom template file for the plugin download-monitor.
 *
 * @author  Marco Di Bella
 * @package mdb-theme-fse
 */


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;


?><a class="download" href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow" target="_self">
    <svg class="download-icon" fill="currentColor" viewBox="0 0 16 16">
        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
    </svg>
    <span class="download-text"><?php $dlm_download->the_title(); ?></span></span>
</a>
