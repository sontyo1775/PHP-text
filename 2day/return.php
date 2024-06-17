<?php

function add($a,$b)
{
    if($a <= 0)
    {
        print '引数aは正の数で指定してください。' . '<br>';
        return;
    }
    if($b <= 0)
    {
        print '引数bは正の数で指定してください。' . '<br>';
        return;
    }
    $total = $a + $b;
    print '合計 : ' . $total . '<br>';
    return $total;
}

$total = add(-5,5);
print $total;