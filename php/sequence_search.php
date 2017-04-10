<?php

//顺序查找数组中某个元素
function sequence_search($arr, $n, $k) {
    $arr[$n] = $k;
    for ($i = 0; $i < $n; $i++) {
        if ($arr[$i] == $k) {
            break;
        }
    }
    if ($i < $n) {
        return $i;
    } else {
        return $n;
    }
}
