<?php

// 打印三角形
function print_triangle($n) {
    for ($i = 0; $i < $n; $i++) {
        for($j=0;$j<=$n-$i;$j++){
            echo ' ';
        }
        for($k=0;$k<=2*$i;$k++)
        {
            echo '*';
        }
        echo "\n";
    }
}

//杨辉三角
function gougu() {
    for($i=0;$i<6;$i++)
    {
        //第一个和最后一个都为1
        $a[$i][0]=1;
        $a[$i][$i]=1;

    }
    for($i=2;$i<6;$i++){
        for($j=1;$j<$i;$j++)
        {
            $a[$i][$j]=$a[$i-1][$i-1]+$a[$i-1][$j];
        }
    }

    for($i=0;$i<6;$i++)
    {
        for($j=0;$j<=$i;$j++){
            echo $a[$i][$j].' ';
        }
        echo "\n";
    }
}


// 合并多个数组
function merge(){
    $c=func_num_args()-1;//返回传递给函数的参数个数
    $a=func_get_args();//返回一个数组，包括函数的参数列表
    for($i=0;$i<=$c;$i++){
        if(is_array($a[$i])){
            for($j=0;$j<count($a[$i]);$j++){
                $r[]=$a[$i][$j];
            }
        }else{
            die('Not a array');
        }
    }
    return $r;
}
print_r(merge(range(1,4),range(1,4),range(1,4)));


//print_triangle(3);
//gougu();