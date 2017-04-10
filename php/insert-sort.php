<?php


// 插入排序（一维数组） 基本思想：每次将一个待排序的数据元素，插入到前面已经排好序的数列中的适当位置，使数列依然有序；直到待排序数据元素全部插入完为止。
function insert_sort($arr){
    $count = count($arr);
    for($i=1; $i<$count; $i++){
        $tmp = $arr[$i];
        $j = $i - 1;
        while($arr[$j] > $tmp){
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $tmp;
            $j--;
        }
    }
    return $arr;
}

print_r(insert_sort([49,38,65,97,76,13,27,49]));