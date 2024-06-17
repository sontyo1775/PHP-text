<?php declare(strict_types=1); ?>
<body>
<?php
require_once dirname(__FILE__) . '/ClassA.php';

try
{
    $classA = new ClassA();
    $classA->methodA();
}
catch(Exception $exception)
{
    print 'メインルーチンで例外をキャッチ。エラー内容：' . $exception->getMessage() . '<br>';
    print '例外のトレース情報は以下の通りです：<br>';
    
    print '<pre>';
    print_r($exception->getTrace());
    print '</pre>';
}

print 'メインルーチン終了します。';
?>
</body>