<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/Clock.php';
//////////////////////////////////////////////
//
//  class Canvas
//
//////////////////////////////////////////////

class Canvas
{
    public $backgroundColor;
    public function drawClock(Clock $clock) : void
    {
        print $clock->show() . '<br>';
    }
}