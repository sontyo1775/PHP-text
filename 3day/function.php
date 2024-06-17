<?php

function checkNumber($value)
{
    return is_numeric($value) && (int)$value > 0;
}

function add($a,$b,&$errorMessage)
{// checkNumber がなかったら if を実行
    if(!checkNumber($a))
    {
        $a = 0;
        $errorMessage = 'err : １番目の引数が正の整数ではありません。';
    }
    if(!checkNumber($b))
    {
        $b = 0;
        $errorMessage = 'err : ２番目の引数が正の整数ではありません。'; 
    }
// checkNumber で帰ってきた a,bを計算する。
    $total = $a + $b;
    return $total;
}

$errorMessage = null;
$result =  add(3,10,$errorMessage);
print '計算結果；'. $result . $errorMessage . '<br>';

$errorMessage = null;
$result = add(4, -5,$errorMessage);
print '計算結果；'. $result . $errorMessage . '<br>';