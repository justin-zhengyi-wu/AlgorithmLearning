<?php

function solution($arr) {
    if (empty($arr) || !is_array($arr)) {
        return -1;
    }

    $left_sum = 0;
    $right_sum = 0;

    foreach ($arr as $k => $item) {
        if ($k == 0) continue;
        $right_sum += $item;
    }
    if ($left_sum == $right_sum) {
        return 0;
    }

    foreach ($arr as $k => $item) {
        if ($k == 0) continue;
        $left_sum += $arr[$k-1];
        $right_sum -= $item;

        if ($left_sum == $right_sum) {
            return $k;
        }
    }
    return -1;
}

$ret = solution([-7,1,5,2,-4,3,0]);
var_dump($ret);
