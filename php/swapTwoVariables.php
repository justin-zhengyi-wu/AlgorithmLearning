<?php

// swap 2 variables without introducing the third variable
// References: http://stackoverflow.com/questions/18356437/swap-two-variables-value-without-using-third-variable-in-php

// Solution 1, works for any variable type.
$a = 5;
$b = 6;
list($a, $b) = array($b, $a);
print $a . ',' . $b;

// Solution 2, works for numbers only.
$a =  $a + $b;  // 5 + 6 = 11
$b = $a - $b;   // 11 - 6 = 5
$a = $a - $b;  // 11 - 5 = 6
print $a . ',' . $b;