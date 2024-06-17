<?php declare(strict_types=1); ?>

<?php

function add(int ...$numbers): int
{
    $total = 0;
    foreach($numbers as $number)
    {
        $total += $number;
    }
    return $total;
}
$numbers = [3,2,4];
$result = add(...$numbers);

print $result;