<?php declare(strict_types=1); ?>
<?php


// 先に配列を作ってしまうと、NULLも通してしまう。
function something(array $array)
{
    print '<pre>';
    print_r($array);
    print '<pre>';
}
//　要素が string 型でなければならず NULLも通さない。
function items(string ...$datas)
{
    print '<pre>';
    print_r($datas);
    print '</pre>';
}

$a = ['aiueo', '', NULL, true, 123];
something($a);

$b = ['aiueo', '', NULL, true, 123];
items($b);
