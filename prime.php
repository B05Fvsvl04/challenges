<?php
function primes($num)
{
	$primes = [];
	$str = "";
	for ($i = 2; $i <= $num; $i++) {
		if (isPrime($i) && $num % $i === 0) {
			$count = 0;
			while ($num % $i === 0) {
				$count++;
				array_push($primes, $i);
				$num = $num / $i;
			}
			$str .= "(" . strval($i);
			if ($count > 1){
				$str .= "**" . strval($count);
			}
			$str .= ")";
		}
	}
	return $str;
}

function isPrime($num)
{
	$max = sqrt($num);
	for ($i = 2; $i <= $max; $i++) {
		if ($num % $i === 0) {
			return false;
		}
	}
	return true;
}

echo primes(27);