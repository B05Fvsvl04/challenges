<?php
function pyramid($n) {
	if ($n<0 || $n=== 0)  {
		return [];
	}
	$subArray = [1];
	$finalArray = [];
	$index = 1;
	do{
		array_push($finalArray, $subArray);
		array_push($subArray, 1);
		$index++;
	} while ($index<=$n);
	return $finalArray;
}
echo "<pre>";
print_r(pyramid(2));
echo "</pre>";