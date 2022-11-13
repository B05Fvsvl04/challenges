<?php
function moveZeros(array $items): array {
	$newItems = $items;
	foreach ($newItems as $key => $item) {
		if (isZero($item)) {
			unset($newItems[$key]);
			$newItems[] = 0;
		}
	}

	return array_values($newItems);
}

function isZero($item): bool {
	return $item === 0 || $item === 0.0;
}


echo '<pre>';
var_dump(moveZeros([9, 0.0, 0, 9, 1, 2, 0, 1, 0, 1, 0.0, 3, 0, 1, 9, 0, 0, 0, 0, 9]));
echo '</pre>';
exit();
