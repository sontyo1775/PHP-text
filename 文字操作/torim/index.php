<?php declare(strict_types=1); ?>
<body>
    <form action="index.php" method="post">
        mail:<input type="text" value="" name="email">
        <input type="submit">
    </form>

<p>-----------</p>

<?php

    $email = '';
    $email = trim($_POST['email']);
   

    if($email === '') {
        print 'mailアドレスは必須入力です。';
    } else {
        print $email;
    }
?>
</body>