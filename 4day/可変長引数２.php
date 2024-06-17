<?php declare(strict_types=1); ?>

<?php
//　複数の数値を足し算して返す。
//　可変長引数は最後の引数にしか使えない。
    function add(string $header, int ...$numbers): string
    {
        $total = 0;
        foreach($numbers as $number)
        {
            $total = $number + $total;
        }
        return $header . $total;
    }

    $result = add('計算結果：', 3, 2, 9, 1);
    print $result;

// 可変長引数を使うことで、スカラー型の引数をいくつでも受け取れるようになる。
// 受け取った後は配列になる。
?>