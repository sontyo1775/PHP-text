<?php
    $userData = [12345, '太郎', 'Tokyo', 32];

    list($name, $Id, $pre, $age) = $userData;

?>
<p>ユーザーID： <?= $name ?> </p>
<p>ユーザー名： <?= $Id ?> </p>
<p>都道府県　： <?= $pre ?> </p>
<p>年齢　　　： <?= $age ?> </p>