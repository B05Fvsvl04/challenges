<?php
$equivalences = [
	"I" => 1,
	"V" => 5,
	"X" => 10,
	"L" => 50,
	"C" => 100,
	"D" => 500,
	"M" => 1000,
];

function solution($roman) {
	global $equivalences;
	$number = 0;
	$arr = str_split($roman);
	$len = count($arr);
	for ($i = 0; $i < $len; $i++) {
		if (isset($arr[$i + 1]) && $equivalences[$arr[$i]] < $equivalences[$arr[$i + 1]]) {
			$number += $equivalences[$arr[$i + 1]] - $equivalences[$arr[$i]];
			$i++;
		} else {
			$number += $equivalences[$arr[$i]];
		}
	}
	return $number;
}

echo (solution("MMC"));
