<body>
<?php

// PHP_EOL は　\n <br> と一緒
$char = ['a','b','c','d'];
// 結果：4
print count($char) . PHP_EOL;

$chars = [
    'a' => 'あ',
    'b' => 'い',
    'c' => 'う',
    'd' => 'え',
    'e' => 'お',
];
// 結果：5
print count($chars) . PHP_EOL;
?>


</body>