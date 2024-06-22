<?php declare(strict_types=1); ?>
<body>
<?php
    // $sentence = 1234;
    // $code = str_pad($sentence, 7, '0', STR_PAD_LEFT);
    // print $code . '<br>';

    $price = '920';
    $priceField = str_pad($price, 8, ' ');
    print $priceField;  // 「920      」

    $sentence = 1234;
    $code = str_pad($sentence . '', 7, '0', STR_PAD_LEFT);
    print $code . '<br>';
?>
</body>