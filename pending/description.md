CODESIGNAL

Given two strings a and b, both consisting only of lowercase English letters, your task is to calculate how many strings equal to a can be constructed using only letters from the string b? Each letter can be used only once and in one string only.

Example

For a = "abc" and b = "abccba", the output should be solution(a, b) = 2.

We can construct 2 strings a = "abc" using only letters from the string b.

For a = "ab" and b = "abcbcb", the output should be solution(a, b) = 1.





This is OK, but it is taking more than 4 seconds on one test
You have an array p of points on a Cartesian plane. Find and return the minimum possible Euclidian distance between two points with different indices in p.

Example

For p = [[0, 11], [-7, 1], [-5, -3]], the output should be
solution(p) = 4.472135955.
function solution($p) {
	$len = count($p);
	$min = [];
	for($i = 0; $i < $len; $i++){
		for($j = $i+1; $j < $len; $j++){
			$min = min($min, eucDistance($p[$i], $p[$j]));
		}
	}
	return $min;
}

function eucDistance(array $a, array $b) {
	$distance = 0;
	$count = count($a);
	for ($i = 0; $i < $count; ++$i) {
		$distance += pow($a[$i] - $b[$i], 2);
	}
	return sqrt((float) $distance);
}