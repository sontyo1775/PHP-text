<?php declare(strict_types=1); ?>
<body>
<?php
/////////////////////////////////////////////////////// 
// 
//  メインルーチン
//
//////////////////////////////////////////////////////

    require_once dirname(__FILE__) . '/Bird.php';
// 鳥インスタンス 
    $bird = new Bird();
// 鳥の状態
    $bird->fly();
    $bird->walk();
?>
</body>