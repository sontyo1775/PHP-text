<?php
declare(strict_types=1); 

class TaxCalculator
{
    private $lastCalculated;

// 計算処理
    public function calculate(int $price, float $tax) : float
    {
        print '計算開始します。<br>' . PHP_EOL;
        // 例外処理　0 以下だったらスローする。
        if($tax < 0)
        {
            throw new Exception('税率はマイナスであってはなりません。');
        }

        print '計算を終了します。<br>' . PHP_EOL;

        $calculated = $price + ($price * $tax);
        $this->lastCalculated = $calculated;

        return $calculated;
    }

    // リセット処理
    public function reset() : void
    {
        $this->lastCalculated = NULL;

        print '計算結果をリセットしました。<br>' . PHP_EOL;
    }

}

// ーーーーーーーーーーーーーーーーーーーーーーーー
//          Exception
// ーーーーーーーーーーーーーーーーーーーーーーーー
// - message 例外メッセージ
// - code 例外コード
// - file 例外が発生したファイル
// - line例外が発生した行番号
// ーーーーーーーーーーーーーーーーーーーーーーーー
// + __construct($message) コンストラクタ
// + __toStrig() 例外を表現する文字列を取得する。
// + getMessage() 例外メッセージを取得する
// + getCode() 例外コードを取得する。
// + getTrace() 例外のトレース情報を取得する。
// ーーーーーーーーーーーーーーーーーーーーーーーー

throw new Exception('エラーメッセージ');