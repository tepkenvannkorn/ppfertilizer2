<?php 

    if ( get_locale() == 'en_US' ) {
        
        define( 'TIMEBEFORE_NOW',         'A few moments ago' );

        define( 'TIMEBEFORE_MINUTE',      '{num}mn ago' );

        define( 'TIMEBEFORE_MINUTES',     '{num}mn ago' );

        define( 'TIMEBEFORE_HOUR',        '{num}hour ago' );

        define( 'TIMEBEFORE_HOURS',       '{num}hours ago' );

        define( 'TIMEBEFORE_YESTERDAY',   'Yesterday' );
    
    } else {
        
        define( 'TIMEBEFORE_NOW',         'អម្បាញ់មិញ' );

        define( 'TIMEBEFORE_MINUTE',      '{num} នាទីមុន' );

        define( 'TIMEBEFORE_MINUTES',     '{num} នាទីមុន' );

        define( 'TIMEBEFORE_HOUR',        '{num} ម៉ោងមុន' );

        define( 'TIMEBEFORE_HOURS',       '{num} ម៉ោងមុន' );

        define( 'TIMEBEFORE_YESTERDAY',   'ម្សិលមិញ' );
    }

    define( 'TIMEBEFORE_FORMAT',      '%e %b' );

    define( 'TIMEBEFORE_FORMAT_YEAR', '%e %b, %Y' );

    function get_article_age( $time ) {

        $out    = ''; // what we will print out

        $now    = current_time( 'timestamp' ); // current time

        $diff   = $now - $time; // difference between the current and the provided dates

        if ( $diff < 60 ) // it happened now

            return TIMEBEFORE_NOW;

        elseif ( $diff < 3600 ) // it happened X minutes ago

            return str_replace( '{num}', ( $out = round( $diff / 60 ) ), $out == 1 ? TIMEBEFORE_MINUTE : TIMEBEFORE_MINUTES );

        elseif ( $diff < 3600 * 24 ) // it happened X hours ago

            return str_replace( '{num}', ( $out = round( $diff / 3600 ) ), $out == 1 ? TIMEBEFORE_HOUR : TIMEBEFORE_HOURS );

        elseif ( $diff < 3600 * 24 * 2 ) // it happened yesterday

            if ( get_locale() == 'en_US' ) {

                return TIMEBEFORE_YESTERDAY . ' at ' . get_the_modified_time( 'G:i a' );

            } else {

                return TIMEBEFORE_YESTERDAY . ' ម៉ោង ' . get_the_modified_time( 'G:i a' );

            }

        else // falling back on a usual date format as it happened later than yesterday

            return get_published_date( get_the_ID() );
    }

	function get_published_date( $id ) {

		$published_date = get_the_date( 'l j F Y', $id );

        if ( get_locale() == 'km' ) {
            
            $published_date = KhmerNumDate( $published_date );
        
        }

		return $published_date;
	}