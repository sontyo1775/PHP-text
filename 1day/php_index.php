<?php
    $colors = ['青','赤','黄','白','黒'];
    // random_int(0, 4) とすることで　→　数字を０～４取得できる。
    // $colors[random_int(0, 4)]とすることで　→$colors[0] と配列を取得できる。
    // <a href="" target="_blank"> _blank で別タブ表示
    $total = 100;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ラッキーカラー占い</title>
</head>
<body>
    <h1>本日、<?= date('Y年m日d日') ?>日のラッキーカラー</h1>
    <p>今日のラッキーカラーは「<?= $colors[random_int(0, 4)] ?>」です！</p>
    <a href="" target="_blank">別タブ</a>

</body>
</html>
