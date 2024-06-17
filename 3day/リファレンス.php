<?php
function add(&$a)
{
     $a += 10;
}

$argument = 5;
add($argument);
print '$argumentは' .  $argument . 'です。';

// リファレンス渡し（参照渡し）は、変数の値ではなく、その変数自体への参照（メモリ上の位置情報）を関数に渡す方法です。
// 元の変数にもその変更が反映されるようになります。