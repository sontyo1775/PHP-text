<?php declare(strict_types=1); ?>
<body>
<?php
    // $date = 'H30.12.31';
    // $date = preg_replace('/\AH([0-9]+)\.([0-9]+)\.([0-9]+)/', '平成${1}年${2}月${3}日', $date);
    // print $date;

    print '●年月日をどっと区切りからハイフン区切りに置換する' . '<br>';
    $diary = '2019.03.03 今日は雨が降っています.' . '<br>';
    print $diary;
    $diary = preg_replace('/([0-9]{4})\.([0-9]{2})\.([0-9]{2})/u', '${1}-${2}-${3}', $diary);
    print $diary . '<br>';

    print '●[LINK]~[/LINK]の文字列を<a>タグに置換する。<br>';
    $diary = '今日は桜ケ丘を散歩しました。参考：[LINK]http://example.com/seiseki[/LINK]';
    $diary = preg_replace('/(\[LINK\])(http:\/.+)(\[\/LINK\])/ui', '<a href="${2}">${2}</a>', $diary);
    print $diary;
?>
</body>