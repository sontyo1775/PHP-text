<?php declare(strict_types=1); ?>
<?php
require_once dirname(__FILE__) . '/buki.php';
require_once dirname(__FILE__) . '/damage.php';

// 武器の名前など記入
$buki = new Buki();
// 名前セット
$buki->name = 'ローラー';
// 攻撃力セット
$buki->attack = 39;
// 攻撃があるか判定する
print $buki->attack;

// ダメージ与えたらどうなるかクラス
$damage = new Damage($buki);
// ダメージ受けたかどうか表示する
print $damage->attackDamageReturn();