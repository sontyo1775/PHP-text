<?php 
declare(strict_types=1);
require_once dirname(__FILE__) . '/LoggingTrait.php';

// 会員クラス
class MemberModel 
{
// useキーワードを使い、トレイトのプロパティ・メソッドを自身に差し込む
    use LoggingTrait;

    public function __construct()
    {
// 独自のファイル名を指定したい場合　↓
        $this->logFileName = 'my-log.log';
    }


// 会員データを新規登録する。
    public function create(string $memberId) : void
    {
        $this->log('created' . $memberId . PHP_EOL);
    }
// 会員データを削除する
    public function delete(string $memberId)
    {
        $this->log('delete' . $memberId . PHP_EOL);
    }
}