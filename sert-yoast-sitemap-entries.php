<?php 
/*
Plugin Name: Limit Yoast SEO Sitemap Entries
Plugin URI: https://www.sertmedia.com
Description: Limits the number of sitemap entries in yoast seo to reduce the amount of resources needed to generate them. 
Version: 1.0
Author: SERTMedia
Author URI: https://www.sertmedia.com
*/

/* Sets limit to 300 per sitemap */
function sert_max_entries_per_sitemap() {
    return 300;
}
add_filter( 'wpseo_sitemap_entries_per_page', 'sert_max_entries_per_sitemap' );
