<?php
// 比較条件 ? 条件一致の時の '値' : 封建不一致の時の '値' ;  
// 条件　＝　T　：　F　;　イメージ

$a = -100;
// 結果：0
print $a < 0 ? 0 : $a;

$a = 100;
// 結果：100
print $a < 0 ? 0 : $a;