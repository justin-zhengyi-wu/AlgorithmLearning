<?php

/*
 二分搜索：在有序数组中查找某一特定元素的搜索算法

 搜索过程从数组的中间元素开始，如果中间元素正好是要查找的元素，则搜索过程结束；如果某一特定元素大于或小于中间元素，则在数组大于或小于中间元素的那一半中查找，再从那一半的中间元素开始比较。如果在某一步骤数组为空，则代表找不到。这种搜索算法每一次比较都使搜索范围缩小一半。

*/
function binary_search($arr, $low, $high, $k) {
    // 如果输入的参数不合理  或 查找范围是两个相邻的数，直接返回-1表示找不到。
    if (($low > $high) || ($high - $low == 1)) {
        return -1;
    }
    $mid = intval(($low + $high) / 2);
    if ($k == $arr[$mid]) {
        return $mid;
    } else if ($k < $arr[$mid]) {
        $high = $mid;
    } else {
        $low = $mid;
    }
    return binary_search($arr, $low, $high, $k);
}

function binary_search2($arr, $low_index, $high_index, $key) {
    while ( $high_index != $low_index + 1 ) {
        $mid_index = ceil(($low_index + $high_index) / 2);
        if ( $key == $arr[$mid_index] ) {
            return $mid_index;
        } else if ( $key < $arr[$mid_index] ) {
            $high_index = $mid_index;
        } else {
            $low_index = $mid_index;
        }
    }
    return -1;
}

$arr = [1, 2, 2, 3, 4, 5, 5, 7, 8];
echo binary_search($arr, 0, 9, 8);
