<?php
declare(strict_types=1);
/////////////////////////////////////////////////////// 
// 
//  飛べるもの
//
//////////////////////////////////////////////////////

// 飛ぶインターフェース
interface Flyable
{
    // 飛ぶアニメーション
    public function fly() : void;
}