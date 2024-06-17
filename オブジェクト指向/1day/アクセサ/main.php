<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/Task.php';
//  new Taskで波線でても気にしない。
    $task = new Task();
    $task->setName('パスポートの更新');
    print 'タスク名：' . $task->getName() . '<br>';

// タスクの進行度　→　120％　にする
    $task->setProgress(120);
    print '進行度' . $task->getProgress() . '<br>';
// タスクの進行度　→　80%した後、0%　に戻す
    $task->setProgress(80);
    $task->clearProgress();
    print '進行度' . $task->getProgress() . '<br>';
// タスクの進行度　→　完了　にする
    $task->completeProgress();
    print '進行度' . $task->getProgress() . '<br>';


?>
</body>