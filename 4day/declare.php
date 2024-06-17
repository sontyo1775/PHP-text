<?php
declare(strict_types=1);
function dosomething(int $num, string $message): ?bool
{
    print 'true<br>';
    return true;
}

//$ret = dosomething(true, 'ARG2');   // 第１引数が整数型の１に変換するためエラーにならない 
//$ret = dosomething('3', 'ARG2');    // 第１引数が整数型に変換されるためエラーにならない

$ret = dosomething(true, 'ARG2');  // bool 型なので通らない　err
$ret = dosomething('3', 'ARG2');   // 文字列なため実行されない err
// $ret = dosomething(3, 'ARG2'); 

// types=1は、型宣言の厳密モードを有効にするための部分です。strict_types の値が 1 の場合、このモードは有効になります。