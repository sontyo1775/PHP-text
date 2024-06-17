<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/ClassB.php';

class ClassA
{
    public function methodA() : void
    {
        $classB = new ClassB();
        
        try
        {
            $classB->methodB();
        }
        catch(Exception $exception)
        {
            print 'methodAで例外をキャッチ。エラー内容：'.  $exception->getMessage() . PHP_EOL;
            throw $exception;
        }
        print 'methodA completed'; // この行は実行されない。
    }
}

//---------------------------------------
//              (呼び出す)   (呼び出す)
// メインルーチン　→　クラスA　→　クラスB
// 
// --------------------------------------