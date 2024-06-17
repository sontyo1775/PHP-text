<?php declare(strict_types=1); ?>

<body>
<?php
    require_once dirname(__FILE__) . '/TaxCalculator.php';

    $calculator = new TaxCalculator();
    
    try
    {
        $priceWithTax = $calculator->calculate(100, -0.08);
        print '金額：' . $priceWithTax . '円';
    }
    catch(Exception $exception)
    {
        print '合計金額が計算できませんでした。理由' . $exception->getMessage() . '<br>' . PHP_EOL;
    }
    finally
    {
        $calculator->reset();
    }

    print 'プログラムを終了します。';
?>
</body>