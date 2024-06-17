<?php declare(strict_types=1); ?>
<body>
<?php
    require_once dirname(__FILE__) . '/MemberModel.php';

    $menmber = new MemberModel();

    $menmber->create('001');  // ID [001] の会員を新規登録する
    $menmber->delete('001');  // ID [001] の会員を削除する
    
// MemberModelが生成したログを画面に表示　
    print nl2br(file_get_contents('MemberModel.log'));

?>
</body>