<?php
declare(strict_types=1);
namespace Ofice\Word;

// Wordファイルの書き出しクラス
class Writer
{
// Wordファイルに書き出すメソッド
    public function write() : void
    {
        print 'word ファイルを書き出す。' . PHP_EOL;
    }
}

// -----------------  名前空間　[ ofice ] -------------------------
//
// //////////////////////////////////////////////////////
// // サブ名前空間[ Word ] —— Writerクラス、  Readerクラス   
// /////////////////////////////////////////////////////
// 
// //////////////////////////////////////////////////////
// //サブ名前空間[ Excel ] —— Writerクラス、  Readerクラス  
// //////////////////////////////////////////////////////
//
// ----------------------------------------------------------------