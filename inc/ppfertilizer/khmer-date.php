<?php

function KhmerNumDate ( $text = '' ) {
	
	$text = str_replace( '1', '១', $text );
	$text = str_replace( '2', '២', $text );
	$text = str_replace( '3', '៣', $text );
	$text = str_replace( '4', '៤', $text );
	$text = str_replace( '5', '៥', $text );
	$text = str_replace( '6', '៦', $text );
	$text = str_replace( '7', '៧', $text );
	$text = str_replace( '8', '៨', $text );
	$text = str_replace( '9', '៩', $text );
	$text = str_replace( '0', '០', $text );
	$text = str_replace( 'Monday', 'ថ្ងៃចន្ទ ទី', $text );
	$text = str_replace( 'Tuesday', 'ថ្ងៃអង្គារ ទី', $text );
	$text = str_replace( 'Wednesday', 'ថ្ងៃពុធ ទី', $text );
	$text = str_replace( 'Thursday', 'ថ្ងៃព្រហស្បតិ៍ ទី', $text );
	$text = str_replace( 'Friday', 'ថ្ងៃសុក្រ ទី', $text );
	$text = str_replace( 'Saturday', 'ថ្ងៃសៅរ៍ ទី', $text );
	$text = str_replace( 'Sunday', 'ថ្ងៃអាទិត្យ ទី', $text );
	$text = str_replace( 'January', 'មករា ឆ្នាំ', $text );
	$text = str_replace( 'February', 'កុម្ភៈ ឆ្នាំ', $text );
	$text = str_replace( 'March', 'មីនា ឆ្នាំ', $text );
	$text = str_replace( 'April', 'មេសា ឆ្នាំ', $text );
	$text = str_replace( 'May', 'ឧសភា ឆ្នាំ', $text );
	$text = str_replace( 'June', 'មិថុនា ឆ្នាំ', $text );
	$text = str_replace( 'July', 'កក្កដា ឆ្នាំ', $text );
	$text = str_replace( 'August', 'សីហា ឆ្នាំ', $text );
	$text = str_replace( 'September', 'កញ្ញា ឆ្នាំ', $text );
	$text = str_replace( 'October', 'តុលា ឆ្នាំ', $text );
	$text = str_replace( 'November', 'វិច្ឆិកា ឆ្នាំ', $text );
	$text = str_replace( 'December', 'ធ្នូ ឆ្នាំ', $text );
	return $text;
	
}