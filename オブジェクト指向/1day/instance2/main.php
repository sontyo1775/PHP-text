<?php declare(strict_types=1); ?>
<body>
<?php
/*//////////////////////////////////////////////////////

        main.php メインルーチン

*///////////////////////////////////////////////////////

    require_once dirname(__FILE__) . '/Task.php';
// add ファイル読み込み
    require_once dirname(__FILE__) . '/Tasksheet.php';
// add 別ファイルのTasksheet クラスのインスタンス化
    $taskSheet = new TaskSheet();

// １個目のインスタンス
    $task1 = new Task();
    $task1->name = 'パスポートの更新';
    $task1->progress = 100;
// add パスポート更新　（連想配列にする）
    $taskSheet->addTask($task1);

    
// ２個目のインスタンス
    $task2 = new Task();
    $task2->name = '食材の買い出し';
    $task2->progress = 50;
// add　食材k買い出し更新　（連想配列にする）
    $taskSheet->addTask($task2);

    print '<br>●タスクリストを表示します・・・・<br>';
// add 別ファイルのインスタンスしたものを表示
    $taskSheet->show();
    
?>
</body>