<?

$simple = array();
$simple[] = 2;
$s = "";
for ($i = 2; $i < 10000000; $i++) {
	$f = true;
	foreach($simple as $s) {
		if ($s > (int)sqrt($i)) break;
		if ($i % $s == 0) {
			$f = false;
		}
	}
	if ($f) {
		$s .= $i." ";
		$simple[] = $i;
	}

}
echo $s;