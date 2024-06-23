<?php declare(strict_types=1); ?>
<body>
<?php
    $matched = [];

    print '●住所から郵便番号を見つける' . '<br>';
    $address = '--- 123-4567 東京都豊島区... ---' . '<br>';
    print $address;
    preg_match('/[0-9]{3}-[0-9]{4}/u', $address, $matched, PREG_OFFSET_CAPTURE);

    print '<pre>';
    print_r($matched);
    print '</pre>';

    print '--------------------------------------------------' . '<br>';
    /////////////////////////////////////////////////////////// 
    print '●文字列から16進数表記のカラーコードを見つける' . '<br>';
    $string = '--- darkviolet - 濃いすみれ色 - #9400d3a ---' . '<br>';
    print $string;
    preg_match('/#[0-9a-f]{6}/ui', $string, $matched, PREG_OFFSET_CAPTURE);

    print '<pre>';
    print_r($matched);
    print '</pre>';

    print '--------------------------------------------------' . '<br>';
    /////////////////////////////////////////////////////////// 
    print '●半角数字およびハイフンのみかをチェックする' . '<br>';
    $input = '---03-999-0000---';
    print $input . '<br>';

    if(preg_match('/\A[0-9\-]+\z/u', $input)) {
        print '入力に問題ありません。' . '<br>';
    } else {
        print '半角数字とハイフンのみで入力してください。' . '<br>';
    }

    print '--------------------------------------------------' . '<br>';;
    /////////////////////////////////////////////////////////// 
    print '●半角英数字のみかを入力チェックする' . '<br>';
    $input = '--HeLLo123';
    if(preg_match('/\A[a-zA-Z0-9]+\z/u', $input)) {
        print '入力に問題ありません。' . '<br>';
    } else {
        print '半角英数字のみで入力してください' . '<br>';
    }

    print '--------------------------------------------------' . '<br>';;
    /////////////////////////////////////////////////////////// 
     print '●半角英数字のみかを入力チェックする（i修飾子）' . '<br>';
     $input = 'HeLLO123';
     print $input;
     if(preg_match('/\A[a-z]+\z/ui', $input)) {
        print '入力に問題ありません。' . '<br>';
     } else {
        print '半角英数字のみで入力してください。' . '<br>';
     }
     print '--------------------------------------------------' . '<br>';;
    /////////////////////////////////////////////////////////// 

    $item = 'aiueo';
    if(preg_match('/[^aiueo]/u', $item)) {
        print $item;
    } else {
        print 'err';
    }
?>
</body>