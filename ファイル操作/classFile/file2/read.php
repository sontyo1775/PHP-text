<?php declare(strict_types=1); ?>
<body>
<?php

    $csv = new SplFileObject('sample.csv','r');

    $csv->setFlags(SplFileObject::READ_CSV);

    foreach($csv as $filedsPerLine) {
        mb_convert_variables('UTF-8', 'SJIS-win', $filedsPerLine);
        print_r($filedsPerLine);
    }
    $csv = null;
?>
</body>