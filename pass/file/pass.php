<?php declare(strict_types=1); ?>
<body>
<?php
    $hasshedPassword = password_hash('abcde1234(^^)v', PASSWORD_DEFAULT, ['const' => 13]);
    print 'ハッシュ化されたパスワード：' . $hasshedPassword . '<br>';

    $input = 'abcde1234(^^)v';

    if(password_verify($input, $hasshedPassword)) {
        print 'パスワード一致しています<br>';
    } else {
        print 'パスワード一致していません<br>';
    }

    $input = 'fda(^^)v';

    if(password_verify($input, $hasshedPassword)) {
        print 'パスワード一致しています<br>';
    } else {
        print 'パスワード一致していません<br>';
    }

?>
</body>