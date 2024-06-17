<?php

// NULL であるか調べたい変数(値) ?? NULL だった時の値 ;

$a = NULL;
// deafult Value が出力
print $a ?? $a ?? 'deafult Value';

$a = 'Value';
// Value が出力
print $a ?? $a ?? 'deafult Value';