<?php 

// Remove P tags from every Contact form 7 field

add_filter( 'wpcf7_autop_or_not', '__return_false' );