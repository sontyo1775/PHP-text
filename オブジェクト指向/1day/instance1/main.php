<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/Task.php';

// １個目のインスタンス
    $task1 = new Task();
    $task1->name = 'パスポートの更新';
    $task1->progress = 100;
    if($task1->isCompleated() === true)
    {
        print $task1->name . 'は完了しました。' . '<br>';
    }
    else
    {
        print $task1->name . 'は未完了です。' . '<br>';
    }
    
// ２個目のインスタンス
    $task2 = new Task();
    $task2->name = '食材の買い出し';
    $task2->progress = 50;
    if($task2->isCompleated() === true)
    {
        print $task2->name . 'は完了しました。' . '<br>';
    }
    else
    {
        print $task2->name . 'は未完了です。' . '<br>';
    }
    
?>
</body>