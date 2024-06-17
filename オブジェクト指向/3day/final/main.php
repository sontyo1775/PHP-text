<?php
    class Clock
    {
        final public function show()
        {
            print 'show Clock...';
        }
    }

    class DigitalClock extends Clock
    {
        public function show()
        {
            print 'show Digital Clock';
        }
    }


    $item = new DigitalClock();
    $item->show();
?>