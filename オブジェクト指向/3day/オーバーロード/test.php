<?php
abstract class Clock
{
    public function setTime($item)
    {
        // 何らかの処理
    }
} 

class DigitalClock extends Clock
{
    public function setTime($item, $fontColor)
    {
        // デジタル時計特有の何らかの処理
    }
}