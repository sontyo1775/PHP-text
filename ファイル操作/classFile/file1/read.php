<?php declare(strict_types=1); ?>
<body>
<?php
    // ファイルをひらく（読み込みモード 'r' ）
    $handle = fopen('sample.txt', 'r');
    // ファイルを１行ずつ読み込む
    while($line = fgets($handle)) {
        $line = trim($line);
        // 空文字があっても処理続ける
        if($line === '') {
            continue;
        }
        print $line . '<br>';
    }
    // ファイルを閉じる
    fclose($handle);
?>
</body>