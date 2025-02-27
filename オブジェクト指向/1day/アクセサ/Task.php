<?php
declare(strict_types=1);

class Task 
{
    // タスク名
    private $name;
    // 進行度
    private $progress;
    // 外に知られたくないトークン
    private $secret;

// name ゲッターメソッド（読み出す）
    public function getName() : string
    {
        return $this->name;
    }
// name セッターメソッド（書き出す）
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
// progress ゲッターメソッド（読み出す）
    public function getProgress(): int
    {
        return $this->progress;
    }
// progress セッターメソッド（書き出す）
    public function setProgress(int $progress) : void
    {
        if($progress < 0)
        {
            $progress = 0;
        }
        elseif($progress > 100)
        {
            $progress = 100;
        }
        $this->progress = $progress;
    }
// タスクを完了ステータスにする。
    public function completeProgress() : void
    {
        $this->progress = 100;
    }
// タスクを未完了ステータスにする。
    public function clearProgress() : void
    {
        $this->progress = 0;
    }
}