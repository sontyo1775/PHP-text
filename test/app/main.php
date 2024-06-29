<?php declare(strict_types=1); ?>
<?php
require_once dirname(__FILE__) . '/class/buki.php';
require_once dirname(__FILE__) . '/class/damage.php';

$toonItems = array(
    array(
        'roller' => 'ローラー',
        'attack' => 100,
    ),
    array(
        'longBr' => 'ロンブラ',
        'attack' => 160,
    ),
    array(
        'hissen' => '筆洗',
        'attack' => 50,
    ),
); 

$roller = new Buki();
$roller->name = $toonItems[0]['roller'];
$roller->attack = $toonItems[0]['attack'];

print $roller->name . 'は' . $roller->attack . 'ダメージ';

$rollerDamage = new Damage($roller);
print $roller->name . 'で' . $rollerDamage->damageRequest() . '<br>';

$longBr = new Buki();
$longBr->name = $toonItems[1]['longBr'];
$longBr->attack = $toonItems[1]['attack'];

$longBrDamage = new Damage($longBr);

print $longBr->name . 'で' . $longBr->attack . $longBrDamage->damageRequest();