<?php
declare(strict_types=1);
/*///////////////////////////////////////

    Task クラス

*////////////////////////////////////////

class Task
{
    // タスク名
    public $name;
    // 優先度
    public $priorty;
    // 進行度
    public $progress;

    public $item;

    // コンストラクター
    // public function __construct(string $name, $item)
    // {
    //     $this->name = $name;
    //     // 優先度　「中」を初期値
    //     $this->priorty = 1;
    //     // 進行度　はじめは０
    //     $this->progress = 0;

    //     $this->item = $item;

    // }
    public function __construct(
        string $name,
        int $priority,
        int $progress,
        string $item,
    )
    {
        $this->name = $name;
            // 優先度　「中」を初期値
            $this->priorty = $priority;
            // 進行度　はじめは０
            $this->progress = $progress;
    
            $this->item = $item;
    }

}