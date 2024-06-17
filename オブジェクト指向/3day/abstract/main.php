<?php declare(strict_types=1) ?>
<body>
<?php
    require_once dirname(__FILE__) . '/DigitalClock.php';
    require_once dirname(__FILE__) . '/AnalogClock.php';
    require_once dirname(__FILE__) . '/Canvas.php';

// add ↓
    $canvas = new Canvas();
// add ↑

// デジタルClock
    $currentTime = strtotime('2018-08-22 17:15');
    $digitalClock = new DigitalClock();
    $digitalClock->setTime($currentTime);
    var_dump($digitalClock->getTime());
    print $digitalClock->show();
// add ↓ 
// アナログClock
    $analogClock = new AnalogClock();
    $analogClock->setTime($currentTime);
    $canvas->drawClock($analogClock);
// add ↑
?>
</body>