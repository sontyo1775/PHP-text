<?php

// 正の整数であれば　T、それ以外は　F
function checkNumber($value)
{
// キャストはデータの操作
// 与えられた値が文字列や浮動小数点数などの別のデータ型である可能性があるため (int) $value　０より大きいか調べる。
    return is_numeric($value) && (int)$value > 0;
}
function add($a, $b) 
{
    if(!checkNumber($a) || !checkNumber($b))
    {
        return 'INVALD';
    }

    $total = $a + $b;
    return $total;
}

$result = add(3,10);
print "<p>計算結果：" . $result . "</p>";

$result = add(5,-4);
print "<p>計算結果：" . $result . "</p>";
