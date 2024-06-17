<?php declare(strict_types=1); ?>
<?php

function add(string $header, int $number1, int $number2, int $number3 = 0): string
{
    $total = $number1 + $number2 + $number3;
    return $header . $total;
}
// 成功例
$numbers = [3,2,4];

// number2が足りないため err
// $numbers = [3];

// $number3は 0 がデフォルトであるため成功する。
// $numbers = [3,2];

// 4番目の要素から無視される。
// $numbers = [3,2,4,12];

//　関数のコール側で可変長引数を使う例
// 配列の各要素をスカラー型の引数に転換してコールすることができる。
$result = add('計算結果：' , ...$numbers);
print $result;