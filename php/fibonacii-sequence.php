<?php

// 斐波那契数列，又称黄金分割数列，指的是这样一个数列：0、1、1、2、3、5、8、13、21、…
// 在数学上，斐波那契数列被以递归的方法定义：F(0)=0，F(1)=1，F(n)=F(n-1)+F(n-2)(n>=2)。
// 需要特别指出的是，斐波那契数列的第1项是0，第2项是1，从第3项开始，每一项都是前两项之和。
/*

  ###上台阶问题 有一个n级的台阶，现在有一个人要登到这个台阶的顶上，他一次可能跨台阶最大级数为m级(m>1)。问这人登顶这个台阶有多少种方法。编程解决这个问题，输入n和m，输出登顶台阶的方法种数。

  具象化理解这个问题

  如果这个台阶有50级，有一个老人和一个年轻人都要登到这个台阶的顶上，老人每次跨出1级或2级台阶，年轻人一次可跨出1级、2级或3级台阶。那么老人与年轻人各自登上顶部的方法有多少种？

  分析

  先看一看老人和年轻人在达到50级台阶之前的一步是停在哪一级台阶上的？老人可能是停在49级或48级；年轻人停留的级数可能为49，48或47。计算老人达到50级台阶的方法数可以转化成计算老人到达49级的方法数与到达48级的方法数之和(F(50)=F(49)+F(48))；而计算这个年轻人到达顶部50级的方法数也可转化为分别计算他到达49，48，47级的方法数之和(F(50)=F(49)+F(48)+F(47))。

  解决问题

*/

function steps($n, $m) {
    if ($m == 1) return 1; // 如果每次最多跨出1级，那只有1种方法

    if ($n == 1) {
        return 1; // 如果台阶数为1，那也只有1种登顶的方法
    } else if ($n == 2) {
        return 2; // 如果台阶数为2，那么只有2种可能, 1-1 或 2
    }

    $result = 0;
    for ($i = 1; $i <= $m; ++$i) {
        // 假设一个人最多可以跨4级台阶时，他在第3级台阶的方法数只能是由第2级方法数与第1级的方法数之和
        // 而不能还有0级与-1级
        if ($n - $i == 0) break;
        $result += steps($n - $i, $m);
    }
    return $result;
}