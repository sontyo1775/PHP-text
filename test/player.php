<?php declare(strict_types=1); ?>
<?php
require_once dirname(__FILE__) . '/buki.php';
// 体力クラス
class Player {
    // 体力
    public $player;
    // 武器
    public $buki;

    // 体力の初期値
    public function __construct(Buki $buki) 
    {
        $this->player = 100;
        $this->buki = $buki;
    }

    // 体力の計算
    public function playerHealth() 
    {
        // 攻撃力を取得
        $bukiAttack = $this->buki->attack;
        // 体力 - 攻撃力
        $bodyValue =  $this->player - $bukiAttack;
        if($bodyValue <= 0) {
            return '体力が０になり倒されました。<br>'; 
        }
        // 計算結果を返す
        return '残り' . $bodyValue . '<br>';
    }

}