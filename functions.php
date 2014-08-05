<?php
/*  Site name/logo
/* ------------------------------------ */
if ( ! function_exists( 'faf_site_title' ) ) {

	function faf_site_title() {

		$title = "";

		//add image
		if ( ot_get_option('custom-logo') ) {
        	$title .= '<img src="'.ot_get_option('custom-logo').'" alt="'.get_bloginfo('name').'">';
        }

		$title .= '<a href="'.home_url('/').'" rel="home">';

		//add title
		$title .= '<h1>'.get_bloginfo('name').'</h1>';
		//add subtitle
		if ( ot_get_option('site-description') != 'off' ) {
        	$title .= '<h2>'.get_bloginfo( 'description' ).'</h2>';
        }

		$title .= '</a>';

		if (true) {
			$title .= '<div class="special-description">';
			$title .= '<h3>#Youthassembly2014 | Austin 6, 7, 8</h3>';
			$title .= '<h3>@United Nation HQ | New York, NY</h3>';
			$title .= '</div>';
		}

		return $title;
	}
}