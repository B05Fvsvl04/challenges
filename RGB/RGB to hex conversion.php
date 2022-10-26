<?php
function rgb($r, $g, $b) {
	return decToHex(checkValue($r)) . decToHex(checkValue($g)) . decToHex(checkValue($b));
}

function checkValue($val){
	return min(max($val, 0), 255);
}
function decToHex($val){
	return str_pad(strtoupper(dechex($val)), 2, 0, STR_PAD_LEFT);
}

var_dump(rgb(1, 0, 211));