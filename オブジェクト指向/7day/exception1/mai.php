<?php declare(strict_types=1); ?>

<body>
<?php
    require_once dirname(__FILE__) . '/TaxCalculator.php';

    $calculator = new TaxCalculator();
    $priceWithTax = $calculator->calculate(100, -0.08);

    print '計算結果は、' . $priceWithTax . '円です。<br>';
?>
</body>