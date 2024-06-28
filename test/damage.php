<?php declare(strict_types=1); ?>
<?php

require_once dirname(__FILE__) . '/buki.php';
// ダメージ当てたらどうなるかクラス
class Damage {
    // 武器プロパティ
    private $buki;

    // 武器の攻撃力の初期化メソッド
    public function __construct(Buki $buki)
    {
        // 武器の攻撃力の初期化プロパティ
        $this->buki = $buki;
    }

    // trueかfalseで判断して表記するメソッド
    public function attackDamageReturn()
    {
        // trueが返ってきた場合
        if ($this->buki->attackDamage() == true ) {
            return '攻撃されました。';
        // falseが返ってきた場合
        } else {
            return '攻撃できません。';
        }
    }
}
    
