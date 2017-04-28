<?php

function inverse($arr) {
    if (empty($arr)) {
        return "";
    }
    if (isset($arr['left'])) {
        $arr['left'] = inverse($arr['left']);
    }
    if (isset($arr['right'])) {
        $arr['right'] = inverse($arr['right']);
    }
    $tmp = $arr['left'];
    $arr['left'] = $arr['right'];
    $arr['right'] = $tmp;
    return $arr;
}

$arr = [
    'val' => 4,
    'left'=> [
        'val' => 2,
        'left' => [
            'val' => 1
        ],
        'right' => [
            'val' =>3
        ]
    ],
    'right' => [
        'val' => 7,
        'left' => [
            'val'=>6
        ],
        'right'=>[
            'val'=>9
        ]
    ]
];

$ret = inverse($arr);
var_dump($ret);