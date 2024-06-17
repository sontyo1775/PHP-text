<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/DigitalClock.php';

class AnalogClock extends Clock
{
// Clock クラスの抽象メソッド show() は、サブクラスで必ず実装する。
    public function show() : string
    {
// 長針は１分間で６度回る。短針は１分間で0.5度回る。
// このルールをもとに計算し、長針と短針の角度を返す。
// ここでは17:15を表す固定値とします。
        $minuteHand = 90;
        $hourHand = 157.5;
        return '長針：' . $minuteHand . '短針：' . $hourHand;
    }
}