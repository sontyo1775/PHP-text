<?php
declare(strict_types=1);

class Task
{
    public $name;
    public $priorty;
    public $progress;

    public function isCompleted() : bool
    {
        return $this->progress >= 100;
    }
    
}