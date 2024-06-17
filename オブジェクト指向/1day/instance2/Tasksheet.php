<?php
declare(strict_types=1);

/*///////////////////////////////////////

            Tasksheetクラス

/*///////////////////////////////////////

require_once dirname(__FILE__) . '/Task.php';

// クラス（Task Sheet）開始
class TaskSheet
{
    public $tasks = [];

// タスクを追加するメソッド　（連想配列にする）
// Task の状態を引きぐ
    public function addTask(Task $task) : void
    {
        // $this->tasks[] = $task;
        print $task->name . 'を追加しました。<br>'; 
        $this->tasks[] = $task;
    }

// タスクを表示するメソッド
    public function show() : void
    {
        foreach($this->tasks as $task)
        {
            if($task->isCompleated())
            {
                print '<b>' . $task->name . '</b></br>';
            }
            else
            {
                print $task->name . '<br>';
            }
        }
    }
}