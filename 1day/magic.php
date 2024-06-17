<?php

function item()
{
    print '現在の関数名は：' . __FUNCTION__ . 'です。'. '<br>';
}
print '現在のファイル名は：' . __FILE__ . 'です。' . '<br>';
print '現在の行番号名は：' . __LINE__ . 'です。' . '<br>';
print '現在のディレクトリは：' . __DIR__ . 'です。' . '<br>';

item();