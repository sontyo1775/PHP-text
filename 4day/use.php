<?php declare(strict_types=1); ?>

<body>
<?php
    $greeting = 'Goods';

    $greetingMaker = function($item) use (&$greeting)
    {
        print $greeting . '' . $item . '<br>';
    };

    $greetingMaker('Morning');


    $greeting = 'Beatiful';
    $greetingMaker('Evening');

?>
</body>