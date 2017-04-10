<?php

//一个数组中除一个元素外别的元素都是两两相同，如何获得这个唯一的元素！

function solution($arr) {
    $ret = false;
    $tmp = array();
    foreach($arr as $k => $v) {
        if (isset($tmp[$v])) {
            $tmp[$v] += 1;
        } else {
            $tmp[$v] = 1;
        }
    }
    foreach($tmp as $k => $v) {
        if ($v==1) {
            return $k;
        }
    }
}

echo solution([11,22,22,11,5,63,13,5,63,18,89,13,89]);