/*
  Plugin Name: UnStoopid SVG 
  Plugin URI: https://github.com/jasonknight/unstoopid-svg
  Description: Simple Plugin to Allow SVG
  Author: Jason Knight
  Version: 1.0 BETA
  Author URI: http://red-e.eu
*/

function unstoopid_svg_allow_svg( $mimes ) {
	$mimes['svg'] = "image/svg+xml";
	return $mimes;
}
add_filter( 'upload_mimes', 'unstoopid_svg_allow_svg');
