<?php

for ($i = 1; $i < 100; $i++) {
    $j = 0;
    for ($k = 1; $k <= $i; $k++) {
        if ($i % $k == 0) {
            $j++;
        }
    }
    // 仅能被 1 及自身整除的数为质数。
    if ($j == 2) {
        echo $i;
        echo "\n";
    }
}
