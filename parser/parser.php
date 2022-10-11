<?php
$commands = [
	"INCREMENT" => "i",
	"DECREMENT" => "d",
	"SQUARE" => "s",
	"OUTPUT" => "o"
];

function parse($data) {
	$val = 0;
	$finArr = [];
	global $commands;
	$operations = str_split($data);
	foreach ($operations as $operation) {
		if ($operation === $commands["INCREMENT"]) {
			$val++;
		} elseif ($operation === $commands["DECREMENT"]) {
			$val--;
		} elseif ($operation === $commands["SQUARE"]) {
			$val = pow($val, 2);
		} elseif ($operation === $commands["OUTPUT"]) {
			array_push($finArr, $val);
		}
	}
	return $finArr;
}

var_dump(parse("iiisdoso"));
