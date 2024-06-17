<?php

$num1 = 3;
$num2 = 10;

function add()
{
// 関数外で定義された $num1, $num2を関数内で使えるようにする。
    global $num1, $num2;

    return $num1 + $num2;
}

$result = add();
print $result;