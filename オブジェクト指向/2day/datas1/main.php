<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/functions.php';
    $data = new Main();

    $data->number = 10;
    $data->math = 21;

    print Main::items(32) . '<br>';
    print $data->datas(  $data->number,$data->math) . '<br>';
?>
</body>