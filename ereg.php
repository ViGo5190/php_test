<?
$url = "http://www.mysite.com/section/index/php";
$url="http://dfhfdfg/";
$regexp = '/[^.]+\.[^.]+$/';

preg_match($regexp, $url, $matches);

#var_dump( $matches);

#$regexp2 = '@^(?:http://)?([^/]+)@i';
#$regexp2 = '@^(?:http://)([a-z.]*)([^/]+)@';
$regexp2  = '/^(?:http:\/\/)+([^\/]+)/';

preg_match($regexp2,$url, $matches2);

var_dump($matches2);
