<?php declare(strict_types=1); ?>
<?php
require_once dirname(__FILE__) . '/buki.php';
require_once dirname(__FILE__) . '/damage.php';
require_once dirname(__FILE__) . '/player.php';
/////////////////////
//
//  基本クラスの使い方
//
////////////////////

// 武器の名前など記入
$roller = new Buki();
// 名前セット
$roller->name = 'ローラー';
// 攻撃力セット
$roller->attack = 100;
// 攻撃があるか判定する
print $roller->attack;

// 武器の攻撃判定の結果
$damageRoller = new Damage($roller);
// 内容を表示する
print $roller->name . 'で' . $damageRoller->attackDamageReturn();

////////////////////////////////////////////////////////////////////////////

// 武器クラス
$gimWiper = new Buki();
// 武器の名前
$gimWiper->name = 'ジムワイパー';
// 武器の攻撃力
$gimWiper->attack = 0;
// 武器の攻撃判定
$gimWiper->attackDamage();
// 武器の攻撃判定の結果
$damageGimwiper = new Damage($gimWiper);
// 内容を表示する
print $gimWiper->attack . $gimWiper->name . 'で' . $damageGimwiper->attackDamageReturn();

/////////////////////////////////////////////////////////////////////////////

/////////////////////
//
//  クラスからクラスの使い方
//
////////////////////

// 武器の名前
$longBr = new Buki();
$longBr->name = 'ロングブラスター';
$longBr->attack = 110;

// 武器の攻撃力の結果
$damageLongBr = new Damage($longBr);
print $longBr->attack . $longBr->name . 'で' . $damageLongBr->attackDamageReturn();
// 体力を取得
$player = new Player($longBr);
$playerHealth = $player->player;
// 攻撃力を取得
$playerLongBr = $player->buki;
// 体力 - 攻撃の値
print $player->playerHealth();

/////////////////////////////////////////////////////////////////////////////

$yumi = new Buki();
// 武器の名前
$yumi->name= 'トライストリンガー';
// 武器の攻撃力
$yumi->attack = 30;
// 武器の攻撃判定
// $yumi->attackDamage();
// 攻撃受けた内容
$yumiDamage = new Damage($yumi);
print  $yumi->attack .'ダメージ' . $yumi->name . 'で' . $yumiDamage->attackDamageReturn();
// 体力を取得
$player = new Player($yumi);
$playerHealth = $player->player;
print $player->playerHealth();