<?php declare(strict_types=1); ?>
<body>
<?php
require_once dirname(__FILE__) . '/PafeNotFoundException.php';
    class UserModel
    {
        public function findProfile(int $userId) : array
        {
            // 引数$userIdに対応するプロフィールページが存在しなかったら過程として例外をスローします。
            throw new PageNotFoundException('User profile does not exsit .');
        }
    }

    $model = new UserModel();
    try
    {
        $profile = $model->findProfile(1001);
    }
    // errページを表示
    catch(PageNotFoundException)
    {
        print file_get_contents('error-page-not-found.html');
        return;
    }
    catch(Exception $exception)
    {
        print file_get_contents('erro-unknown.html');
    }
?>
</body>
