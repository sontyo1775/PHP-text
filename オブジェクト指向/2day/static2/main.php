<?php
require_once dirname(__FILE__) . '/ShoppingPoint.php';

class WeekDayPoint
{
// 金曜日なら１ポイント加算するメソッド
    public function addWeekDayPoint(string $youbi)
    {
        if($youbi === 'Fri')
        {
            ShoppingPoint::countUpPoint();
        }
    }
}
//------------------------------　クラスココまで　---------------------------------------- //
//------------------------------　関数　------------------------------------------------ //

// 1,000円以上購入1ポイント加算する関数
function addPricePoint(int $price)
{
    if($price >= 1000)
    {
        ShoppingPoint::countUpPoint();

    }
}
// --------------------------------　出力覧　---------------------------------------- // 

// 購入しただけで無条件に１ポイント加算　　・・・　結果　：　1ポイント目
ShoppingPoint::$point = 0;
// 曜日によって１ポイント加算　　・・・　結果：2ポイント目
ShoppingPoint::countUpPoint();

$weekDayPoint = new WeekDayPoint();
$weekDayPoint->addWeekDayPoint('Fri'); // ・・・　結果　：　3ポイント目
// 購入金額によって１ポイント加算
addPricePoint(5000);

print '購入ポイント：' . ShoppingPoint::$point;