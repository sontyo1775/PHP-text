<?php declare(strict_types=1); ?>
<?php

// 武器クラス
class Buki {
    // 武器の名前
    public $name;
    // 武器の攻撃力
    public $attack;
    // 武器の攻撃力の初期値
    public function __construct()
    {
        $this->attack = 0; // 初期値として攻撃力を0に設定する
    }

    // 武器の攻撃力の判定メソッド
    public function attackDamage(): bool 
    {
        // trueかfalseを返す
        return $this->attack > 0;
    }
}