<?php

function add($a)
{
    //  $a += 10;
    $a = $a + 10;
    return $a;
}

$argument = 5;
$b = add($argument);
print '$argumentは' .  $argument . 'です。';
print '$argumentは' .  $b . 'です。';
// 結果　：　５

// PHP の関数が通常、値渡しで引数を受け取るためです。
// 関数内で引数の値を変更しても、元の変数には影響を与えないということです。
// び出し元に影響を与えないことを意味します。