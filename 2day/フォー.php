<pre>
<?php

$items = [
    'あいうえお',
    'かきくけこ',
    'ちりぬるお',
    'わかよたれそ'
];

for($i = 1; $i <= count($items); $i++)
{
    print $i . '行目' . $items[$i - 1] . PHP_EOL;
}
?>

</pre>