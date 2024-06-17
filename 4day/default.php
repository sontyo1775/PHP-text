<?php declare(strict_types=1); ?>
<!-- デフォルトの引数を定義 -->
<body>
    <?php
        // デフォルトの引数は右側にかかないといけない。err になる。
        function zeikin(int $price, float $tax = 0.08): float
        {
            $result = $price * (1 + $tax);
            return $result;
        }

        $taxPrice = zeikin(1000);
        print '<p>計算結果　：' . $taxPrice . '</p>';

        $taxPrice = zeikin(1000, 0.05);
        print '<p>計算結果　：' . $taxPrice . '</p>';
    ?>
</body>