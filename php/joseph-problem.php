<?php

/*
  约瑟夫环(Joseph Problem)
*/

// 返回最后一个同学的编号
// $n为排成一圈的同学数量
// $m为离开队伍的报数
// $k为开始报数的同学编号
function joseph($n, $m, $k) {
    $arr = $k == 1 ? range(1, $n) : array_merge(range($k, $n), range(1, $k - 1));
    $saynumber = 0;
    while ( true ) {
        foreach ($arr as $key => $val) {
            if (++$saynumber == $m) {
                unset($arr[$key]);
                $saynumber = 0;
                if (count($arr) == 1) {
                    return array_values($arr)[0];
                }
            }
        }
    }
}

function joseph2($n, $m, $k, $saynumber = 0, &$arr = null) {
    $arr = !is_null($arr) ? $arr : ($k == 1 ? range(1, $n) : array_merge(range($k, $n), range(1, $k - 1)));
    foreach($arr as $key => $val) {
        if (++$saynumber == $m) {
            unset($arr[$key]);
            if (count($arr) == 1) {
                return array_values($arr)[0];
            }
            $saynumber = 0;
        }
    }
    return joseph($n, $m, $k, $saynumber, $arr);
}