<?php

function swap(&$x, &$y) {
	$t = $x;
	$x = $y;
	$y = $t;
}
function selection_sort(&$arr) {
	for ($i = 0; $i < count($arr) - 1; $i++) {
		$min = $i;
		for ($j = $i + 1; $j < count($arr); $j++)
			if ($arr[$min] > $arr[$j])
				$min = $j;
		swap($arr[$min], $arr[$i]);
	}
}
$arr = [3,5,1,7,100,2,9];
$ret = selection_sort($arr);
var_dump($arr);