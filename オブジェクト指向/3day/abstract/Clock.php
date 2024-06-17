<?php
declare(strict_types=1);
//////////////////////////////////////
//
// 孫　→　AnalogClock, DigitalClock に継承
//
/////////////////////////////////////
abstract class Clock
{
// 現在の時刻
    protected $time;
// 時間を示す（抽象メソッド）
    abstract public function show() : string;

// ---------------------- アクセサメソッド （具象メソッド　--- そのまま継承する）--------------------------- 
    public function setTime(int $time) : void
    {
        $this->time = $time;
    }
// err 気にしない。
    public function getTime() : string 
    {
        return $this->time;
    }
// ---------------------------------------------------------------
}