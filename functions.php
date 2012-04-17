<?php 
/**
 * Returns true if Internet Explorer has been detected.
 */
function is_ie() {
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
		return true;
	} else {
		return false;
	}
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