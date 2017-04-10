<?php

function my_strrev($str) {
    if (empty($str)) {
        return $str;
    }
    $len = strlen($str);
    $ret = '';
    for ($i = $len -1; $i >= 0; $i--) {
        $ret .= $str[$i];
    }
    return $ret;
}

function my_strlen($str) {
    if (empty($str)) {
        return $str;
    }
    $count = 0;
    while(true) {
        if ($str[$count] != NULL) {
            $count++;
            continue;
        } else {
            break;
        }
    }
    return $count;
}

function my_strcmp($str1, $str2) {
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    if ($len1 > $len2) return 1;
    if ($len2 > $len1) return -1;
    for ($i = 0; $i < $len1; $i++) {
        if ($str1[$i] == $str2[$i]) {
            continue;
        } else {
            return ($str1[$i] < $str2[$i]) ? -1 : 1;
        }
    }
    return 0;
}


$ret = my_strrev('asdfghjkl');
//$ret = my_strcmp('abcde','abced');
echo($ret);
