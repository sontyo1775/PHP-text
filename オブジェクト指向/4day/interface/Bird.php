<?php declare(strict_types=1); 
/////////////////////////////////////////////////////// 
// 
//  インターフェース実装 （鳥）
//
//////////////////////////////////////////////////////
require_once dirname(__FILE__) . '/Flyable.php';  // 飛ぶファイル
require_once dirname(__FILE__) . '/Walkable.php'; // 歩くファイル

// 鳥クラス
class Bird implements Flyable, Walkable
{
    // 飛ぶメソッド
    public function fly() : void
    {
        print '鳥固有の飛ぶアニメーション処理<br>';
    }
    // 歩くメソッド
    public function walk() : void
    {
        print '鳥固有の歩くアニメーション処理<br>';
    }
}