<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/ofice/word/Writer.php';
    require_once dirname(__FILE__) . '/ofice/excel/Writer.php';

    $writer = new \Ofice\Word\Writer();
    $writer->write();

    $writer = new \Ofice\Excel\Writer();
    $writer->write();
?>
</body>