<?php declare(strict_types=1); ?>

<body>
<?php
    $greeting = 'こんにちは　コンニチハ　ｺﾝﾊﾞﾝﾊ　Hello　HELLO HELLO hello １２３';

    print mb_convert_case($greeting, MB_CASE_UPPER) . '<br>';   // 英語が全部大文字になる
    print mb_convert_case($greeting, MB_CASE_LOWER) . '<br>';   // 英語が最初の文字小文字になる
    print mb_convert_case($greeting, MB_CASE_TITLE) . '<br>';   // 英語が最初の文字大文字になる

    print mb_convert_kana($greeting, 'KV') . '<br>';    // 半角文字が全角カナになる
    print mb_convert_kana($greeting, 'rns') . '<br>';   // 数字が半角英数字に、全角スペースが半角になる
?>
</body>