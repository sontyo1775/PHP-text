<?php declare(strict_types=1); ?>
<body>
<?php
    print '●file関数でファイルを読みます。<br>';
    $lines = file('./note.txt');
    foreach($lines as $line) {
        print trim($line) . '<br>';
    }

    print '---------------------------<br>';

    print '●file_get_contents関数でファイルを読み込む<br>';
    $contents = file_get_contents('./note.txt');
    print $contents . '<br>';

    print '---------------------------<br>';

    print '●readfile関数でファイルを読み込みます<br>';
    readfile('./note.txt');

?>
</body>