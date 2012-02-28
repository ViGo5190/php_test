<?

$simple = array();
$simple[] = 2;

for ($i = 2; $i < 100; $i++) {
	$f = true;
	foreach($simple as $s) {
		if ($s > (int)sqrt($i)) break;
		if ($i % $s == 0) {
			$f = false;
		}
	}
	if ($f) {
		echo $i." ";
		$simple[] = $i;
	}
}
