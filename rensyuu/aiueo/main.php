<?php declare(strict_types=1); ?>
<body>
<?php 
    require_once dirname(__FILE__) . '/class1.php';

    $roller = new Weapon('ローラー', 1, '白', '多いです');
    print $roller->getName();
    print $roller->getNumber();

?>
</body>