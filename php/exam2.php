<?php
/**
 * 对于用户输入一串字符串$string,要求$string中只能包含大于0的数字和英文逗号，
 * 请用正则 表达式验证，对于不符合要求的$string返回出错信息
 */
function solution($string) {
    if (preg_match('/^[1-9,]+$/', $string)) {
        return true;
    }
    return false;
}

$string = "1,23,5,22";
//$string = "1,23,5,s22";
if (solution($string)) {
    echo '验证成功。';
} else {
    echo '字符串中只能含有大于0的数字及英文逗号。';
}