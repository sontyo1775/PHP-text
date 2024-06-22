<?php declare(strict_types=1); ?>
<body>
    <?php
        $today = '2020-03-16';

        $dateElements = explode('-', $today);
        print_r($dateElements);  // Array ( [0] => 2020 [1] => 03 [2] => 16 ) 

        list($year, $month, $day) = explode('-', $today);

        print '年:' . $year . '<br>'; // 年:2020
        print '月:' . $month . '<br>'; // 月:03
        print '日:' . $day . '<br>'; // 日:16
    ?>
</body>