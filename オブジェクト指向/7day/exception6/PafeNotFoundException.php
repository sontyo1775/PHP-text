<?php declare(strict_types=1);

class PageNotFoundException extends Exception
{
    // 特に必要ない限り、プロパティやメソッドの記載は不要
}

// //////////////////////////////
//
//      Throwable <<interface>>
//              ||
// Exception    +    Error
// 
///////////////////////////////// 

public function __get($name)
public function __set($name, $value)