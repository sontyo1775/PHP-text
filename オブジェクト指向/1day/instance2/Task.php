<?php
declare(strict_types=1);
/*///////////////////////////////////////

    Task クラス

*////////////////////////////////////////

class Task
{
    public $name;
    public $priorty;
    public $progress;

    public function isCompleated() : bool
    {
        return $this->progress >= 100;
    }
}