<?php declare(strict_types=1); ?>
<body>
<?php
    // ファイルを読み込む
    $file = new SplFileObject('sample.txt');
    // 読み書き実行オプション
    $file->setFlags(SplFileObject::READ_AHEAD | SplFileObject::SKIP_EMPTY | SplFileObject::DROP_NEW_LINE);
    
    // 繰り返すため初期値を０にする
    $lineNumber = 0;

    foreach($file as $line) {
        $lineNumber++;
        // 行ごとにファイルに書いてある文字を表示
        print "{$lineNumber}行目：『{$line}』" . '<br>';
    }
    // クラスのロックを解除する
    $file = null;
?>
</body>