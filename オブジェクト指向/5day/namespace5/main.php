<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/ofice/word/writer.php';
    use ofice\Word\Writer;
    class SomeClass
    {
        public function __construct()
        {
            $writer = new Writer();

            $writer->write();
        }
    }
    $c = new SomeClass();
 
?>
</body>