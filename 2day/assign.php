<?php

$i1 = 'Hello';
$i2 = &$i1;
$i1 = 'world';

?>

<p>i1 : <?=  $i1 ?></p>
<p>i2 : <?=  $i2 ?></p>
<!-- i1 ,i2 共に　world になる。 -->