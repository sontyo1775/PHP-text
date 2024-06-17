<?php
declare(strict_types=1);
//////////////////////////////////////
//
// 親 →　Class Clock ---- > Clock.php
//
/////////////////////////////////////

require_once dirname(__FILE__) . '/Clock.php';

class DigitalClock extends Clock 
{
// Clockクラスの抽象メソッドshow()に追加するために記入。
    public function show() : string
    {
        return date('H:i', $this->time) . '<br>';
    }
}