<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/ofice/File.php';

    $file = new \Ofice\File();
    
    $file->setExcelProperty();
    $file->setWordProperty();
?>
</body>