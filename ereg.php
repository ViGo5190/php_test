<?
$url = "http://www.mysite.com/section/index/php";

$regexp = "[A-a]";

preg_match($regexp, $url, $matches);

var_dump( $matches);
