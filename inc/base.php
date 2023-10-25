<?php
function check_https() {
	if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {
		return 'https';
	}
	return 'http';
}

function app_url() {
	return check_https() . '://' . $_SERVER['HTTP_HOST'];
}

define('BASE_URL', app_url() . '');//for official website of rcf in host
// define('BASE_URL', app_url() . '/RCF_public_html');
//Pagiantion Result per page
$result_per_page = 6;

 ?>
