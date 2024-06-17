<?php declare(strict_types=1); ?>
<body>
<?php
/////////////////////////////////////////////////////// 
// 
//  メインルーチン 2
//
//////////////////////////////////////////////////////

    require_once dirname(__FILE__) . '/Sky.php';
    require_once dirname(__FILE__) . '/Bird.php';
    require_once dirname(__FILE__) . '/Airplane.php';

// 空インスタンス
    $sky = new Sky();
// 鳥インスタンス 
    $bird = new Bird();
// 飛ぶインスタンス
    $airplane = new Airplane();
    
// 鳥の状態
    $sky->draw($bird);
    $sky->draw($airplane);
?>
</body>