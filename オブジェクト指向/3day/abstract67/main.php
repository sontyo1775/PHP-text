<?php declare(strict_types=1); ?>
<body>
<?php
    abstract class Clock
    {
        private $time;


        public function __construct(int $time)
        {
            print 'Clockクラスのコンストラクタが呼ばれました<br>';
            $this->time = $time;
        }
    }

    class DigitalClock extends Clock
    {
        private $color;

        public function __construct(int $time, string $color)
        {
            print 'DigitalClockクラスのコンストラクタがよばれました。<br>';
            $this->color = $color;
            parent::__construct($time);
        }
    }


    $currentTime = strtotime('2018-08-09 17:15');
    $digitalClock = new DigitalClock($currentTime, 'yellow');

?>
</body>