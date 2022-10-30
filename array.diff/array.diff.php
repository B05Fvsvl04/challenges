<?php
function arrayDiff($a, $b) {
	$c = [];
	foreach ($a as $num) {
		if (!in_array($num, $b)) {
			array_push($c, $num);
		}
	}
	return $c;
}

var_dump(arrayDiff([1, 2], [1]));
