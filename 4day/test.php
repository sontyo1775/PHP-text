<?php declare(strict_types=1); ?>
<?php

$items = ['いぬ','ねこ','こあら','ぱんだ'];

$corlBack = function(string $a, int $b) : array
{
    // var_dump($a);
    // var_dump($b);
    $c[] = $a ;
    $c[] = $b ;

    return $c;
};

$corlBack('test', 123); 

print '<pre>';
print_r($corlBack);
print '</pre>';

$result = $corlBack('test', 123); 
print '<pre>';
print_r($result);
print '</pre>';

print $result[0];

$n = 'aaaa';

$testitem = function(int $q, string ...$i,) use (&$n): array
{
    $a[] = $q + 10;

    foreach($i as $k)
    {
        $g[] = $k . $n;
    }

    return $g;

};

$aaa = $testitem(234, 'まんぷく','てんさい','アイテム', 'けんだま');  
print $aaa[0];