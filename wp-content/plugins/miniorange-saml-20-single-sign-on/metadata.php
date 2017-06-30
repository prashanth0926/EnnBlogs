<?php
$http_host = $_SERVER['HTTP_HOST'];

if(substr($http_host, -1) == '/') {
	$http_host = substr($http_host, 0, -1);
}

$request_uri = $_SERVER['REQUEST_URI'];			
if(substr($request_uri, 0, 1) == '/') {
	$request_uri = substr($request_uri, 1);
}

$base_url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $http_host . '/' . $request_uri;
$pos = strpos($base_url, 'wp-content');
$base_url = substr($base_url, 0, $pos - 1);
$url = $base_url . "/?option=mosaml_metadata";
header('Location: '.$url);
exit();
?>