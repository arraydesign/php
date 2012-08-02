<?php 
/**
 * Returns true if Internet Explorer has been detected.
 */
function is_ie() {
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 9.') !== false) {
			return false;
		} else {
			return true;
		}
	} else {
		return false;
	}
}

/**
 * Returns true if NOT iPhone.
 */
function notIphone($user_agent=NULL) {
    if(!isset($user_agent)) {
        $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    }
    return (strpos($user_agent, 'iPhone') == FALSE);
}

/**
 * Sets up the base url.
 */
$burl = 'http://'. $_SERVER['HTTP_HOST'].'/framework/php/';

/**
 * Returns the current url of the page.
 */
function curPageURL() {
	$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
	return $pageURL;
}
$curl = curPageURL();
?>