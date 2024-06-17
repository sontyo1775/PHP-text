<?php declare(strict_types=1); ?>
<body>
<?php
    class SomeClass
    {
        // インスタンスプロパティ
        private $instanceProperty;
        // 静的メソッド
        public static function staticMethod()
        {
            // insutanceProperty にアクセスする。
            // エラー
            $this->instanceProperty= 1;
        }
    }
    SomeClass::staticMethod();
?>
</body>