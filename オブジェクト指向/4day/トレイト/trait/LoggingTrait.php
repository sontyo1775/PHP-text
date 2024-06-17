<?php
declare(strict_types=1);
require_once dirname(__FILE__) . '/Logger.php';

// ログ出力の初期化処理するためのトレイト
trait LoggingTrait
{
    // Loggerインスタンス
    private $logger;
    // ログファイル名
    private $logFileName;

    // Loggerインスタンスをロードする
    private function loadLogger() : void
    {
        if($this->logFileName === NULL)
        {
        // _CLASS__ クラス名を表す定義
            $this->logFileName = __CLASS__ . '.log';
        }
        $this->logger = new Logger($this->logFileName);
        // 動作確認のために前の実行のたびにログファイルを初期化
        $this->logger->clear();
    }

    // ログ出力するメソッド
    private function log(string $data) : void
    {
        if($this->logger === NULL)
        {
            $this->loadLogger();
        }
        // 出力データの冒頭に現在時刻をつける。
        $date = date('Y-m-d H:i:s') . '' . $data;
        $this->logger->write($date);
    }
}