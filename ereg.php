<?
$url = "http://www.mysite.com/section/index/php";

$regexp = '/[^.]+\.[^.]+$/';

preg_match($regexp, $url, $matches);

var_dump( $matches);

$regexp2 = '@^(?:http://)?([^/]+)@i';

preg_match($regexp2,$url, $matches2);

var_dump($matches2);
