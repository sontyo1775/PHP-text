<?php declare(strict_types=1); ?>
<body>
<?php
    $log = '■ 2019-12-12';
    file_put_contents('./log.txt', $log);

    $log = '■ 2012-03-23';
    file_put_contents('log.txt', $log, FILE_APPEND);

?>
</body>