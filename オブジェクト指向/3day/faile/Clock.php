<?php
declare(strict_types=1);

abstract class Clock
{
// 現在の時刻
    protected $time;
// 時間を示す
    abstract public function show() : string;

    public function setTime(int $time) : void
    {
        $this->time = $time;
    }
// err 気にしない。
    public function getTime(): string
    {
        return $this->time;
    }
}