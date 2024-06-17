<?php declare(strict_types=1); ?>
<?php
// 時計クラス（親クラス）
abstract class Clock
{
    public function setTime(string $time, $extraArguments = null)
    {
        // 何らかの処理
    }
}
// デジタルクラス（子クラス）
class DigitalClock extends Clock
{
    public function setTime(string $time, $extraArguments = null)
    {
        // デジタル時計の特融処理
        // 引数を使って、文字色のデータを受け取る。
        echo 'デジタルクラスの第１引数は' .  $time . '第２引数は' .  $extraArguments['textColor'] . '<br>';
    }
}
// アナログクラス（子クラス）
class AnalogClock extends Clock
{
    public function setTime(string $time, $extraArguments = null)
    {
        // アナログ時計特有の処理
        // 引数は無視する。
        echo 'アナログクラスの第１引数は' . $time . '第２引数は' . $extraArguments . '<br>';
    }
}

// メインルーチン
$digitalClock = new DigitalClock();
$digitalClock->setTime('11:14', ['textColor' => 'green']); // 引数２個

$analogClock = new AnalogClock();
$analogClock->setTime('11:14');  // 引数１個
?>
