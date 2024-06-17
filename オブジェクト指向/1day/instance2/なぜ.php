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

    public function shoTaskNmae() : string
    {
        if($this->progress >= 100)
        {
            return '' . $this->name . '</b>';
        }
        else
        {
            return $this->name;
        }
    }
}