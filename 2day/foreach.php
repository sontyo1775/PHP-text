<body>
<?php

$numbers = [3,5,-1,2];

foreach($numbers as &$number)
{
    if($number < 0)
    {
        $number = 0;
    }
}
// ループ処理が終わった後は、必ずunset()で参照渡しを消す。
unset($number);

?>

<pre> <?php print_r($numbers); ?></pre>
</body>