<?php declare(strict_types=1); 

require_once dirname(__FILE__) . '/Flyable.php';  // 飛ぶファイル

class Airplane implements Flyable
{
    // 飛ぶメソッド
    public function fly() : void
    {
        print '飛びます<br>';
    }
}