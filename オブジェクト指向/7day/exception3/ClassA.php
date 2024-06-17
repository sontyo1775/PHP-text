<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/ClassB.php';

class ClassA
{
    public function methodA() : void
    {
        $classB = new ClassB();
        $classB->methodB();
        print 'methodA completed'; // この行は実行されない。
    }
}

//---------------------------------------
//              (呼び出す)   (呼び出す)
// メインルーチン　→　クラスA　→　クラスB
// 
// --------------------------------------