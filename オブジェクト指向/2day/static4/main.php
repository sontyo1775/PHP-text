<?php
// ------------------------　何らかのクラス　------------------------------ //
class SomeClass
{
    private $instanceProperty;
    public function isntanceMethod()
    {
        print 'instanceMethod() called <br>';
    }
// クラス内の　静的メソッド
    public static function staticMethod()
    {
        $someClass = new SomeClass();
        $someClass->isntanceMethod();

        $exClass = new EXClass();
        $exClass->exMethod();
    }
}
//　ーーーーーーーーー　外部クラス　ーーーーーーーーーーーーー //
class EXClass
    {
// 外部クラスのインスタンスメソッド
        public function exMethod()
        {
            print 'exMethod() called <br>';
        }
    }
// ---------------------- メインルーチン ------------------------ //
SomeClass::staticMethod();
