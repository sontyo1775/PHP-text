<?php declare(strict_types=1); ?>
<body>
<?php
    class SuperClass
    {
        protected $datal;
        public function __construct(string $datal)
        {
            $this->datal = $datal;
            print $this->datal;
        }
    }

    class SubClass extends SuperClass
    {
        // 特に何も記載なし
    }
    $subClass = new SubClass('This is datal');
?>
</body>