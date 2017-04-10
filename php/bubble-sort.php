<?php 
//对数组冒泡排序
function bubble_sort($array){
    if (!is_array($array)) {
        return false;
    }
	$count = count($array);
	if ($count <= 0) {
		return false;
    }
    for($i=0; $i<$count; $i++){
        for($j=$count-1; $j>$i; $j--){
			if ($array[$j] < $array[$j-1]){
				$tmp = $array[$j];
				$array[$j] = $array[$j-1];
				$array[$j-1] = $tmp;
            }
        }
    }
    return $array;
}


$ret = bubble_sort([3,5,1,7,100,2,9]);
//$ret = bubble_sort(false);
var_dump($ret);