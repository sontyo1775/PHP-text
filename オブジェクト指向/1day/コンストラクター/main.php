<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/Task.php';

    $task = new Task('パスポート更新',1,0, 'あいうえお');
    print $task->name . '<br>';
    print $task->priorty . '<br>';
    print $task->progress . '<br>';
    print $task->item . '<br>';

?>
</body>