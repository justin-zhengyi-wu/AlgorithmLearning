<?php

/**
 * 请以空格作为间隔，拆分字符串’Apple Orange Banana Strawberry’,组成数组$fruit，
 * 数组中所有元素都用小写字母，并按照字母先后次序排序
 */
function solution($str) {
    $arr = explode(" ", strtolower($str));
    sort($arr);
    return $arr;
}

var_dump(solution("Apple Orange Banana Strawberry"));