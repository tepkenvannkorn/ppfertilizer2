<?php

/* String Translations for Polly Lang */

add_action('init', function() {

    if ( function_exists( 'pll_register_string' ) ) {

        pll_register_string( 'search-anything', 'Search ...' );
        pll_register_string( 'banteaysrei-home', 'Home' );
        pll_register_string( 'read-entire-article', 'Read entire article' );
        pll_register_string( 'all-members', 'All Members' );
        pll_register_string( 'all-videos', 'All Videos' );
        pll_register_string( 'apply-now', 'Apply Now' );
        pll_register_string( 'learning', 'Learning' );
        pll_register_string( 'producer', 'Producer' );
        pll_register_string( 'producers', 'Producers' );
        pll_register_string( 'service', 'Service' );
        pll_register_string( 'service-providers', 'Service Providers' );
        pll_register_string( 'download-attachment', 'Download Attachement' );
        pll_register_string( 'all-communities', 'All Communities' );
        pll_register_string( 'share-this-article', 'Share this article' );
        pll_register_string( 'news-and-events', 'News & Events' );
        pll_register_string( 'similar-stories', 'Similar Stories' );
        pll_register_string( 'success-stories', 'Success Stories' );
        pll_register_string( 'banteaysrei-careers', 'Careers' );
        pll_register_string( 'latest-stories', 'Latest Stories' );
        pll_register_string( 'not-found-404', "Oops! That page can't be found." );
        pll_register_string( 'nothing-found', "Nothing Found" );
        pll_register_string( 'search-result', "Search Results" );
        pll_register_string( 'close-date', "Close Date" );
        pll_register_string( 'search-result-for', "Search Results for: %s" );
        pll_register_string( 'content-not-found', "It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help." );
        pll_register_string( 'content-not-found-in-search', "Sorry, but nothing matched your search terms. Please try again with some different keywords." );
        pll_register_string( 'not-found-404-text', 'It looks like nothing was found at this location. Maybe try one of the links below or a search?' );

    }

});