<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/Function.php';

    print ExcelColumnConverter::AlfabetName(3) . '<br>';
    print ExcelColumnConverter::NumberName('F') . '<br>';

    print chr(ord('A'));

?>
</body>