<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/ofice/word/writer.php';
    require_once dirname(__FILE__) . '/ofice/excel/writer.php';

    // use ofice\word\writer as WordWriter, ofice\excel\writer as ExcelWriter;

    // use ofice\word {
    //     Writer,
    //     Reader
    // };

    use ofice\ 
    {
        word\Writer as WordWriter,
        excel\Writer as ExcelWriter,
    };

    $writer = new WordWriter();
    $writer->write();

    $writer = new ExcelWriter();
    $writer->write();
?>
</body>