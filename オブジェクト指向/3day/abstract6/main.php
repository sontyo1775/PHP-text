<?php declare(strict_types=1); ?>
<body>
<?php
    abstract class Clock
    {
        public function setTime(int $time) : void
        {
            print 'ClockクラスのsetTime()がよばれました。<br>';
        }
    }

    class DigitalClock extends Clock
    {
        public function setTime(int $time) : void
        {
            print 'DigitalCLockクラスのsetTime()が呼ばれました。<br>';
            parent::setTIme($time);
        }
    }

    $currentTime = strtotime('2018-08-09 17:15');
    $digitalClock = new DigitalClock();
    $digitalClock->setTime($currentTime);
?>
</body>