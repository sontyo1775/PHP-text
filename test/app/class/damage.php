<?php declare(strict_types=1); ?>
<?php
require_once dirname(__FILE__) . '/buki.php';

class Damage {
    public $buki;
    public $damage;
    public function __construct(Buki $buki) 
    {
        $this->damage = 0;
        $this->buki = $buki;
    }

    // ダメージ受けたら
    public function damageRequest() 
    {
        // 武器クラス取得 
        $bukiAttack = $this->buki->attack;
        // 攻撃プロパティ取得
        $damage = $this->damage;
        // 攻撃受けた値
        $damageValue = $damage - $bukiAttack;
        if($damageValue <= 0 || $damageValue === 0) {
            return '倒されました。';
        } else {
            return 'たえた！';
        }
    }
}