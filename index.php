<?php
//初項a 公差d 項数n が与えられたとき、長さnの等差数列
// a = 2, d = 3, n = 10 のとき
$n = 1;
for ($a = 2; $n <= 10; $a += 3 )
{
    echo $a . " ";
    $n ++;
}