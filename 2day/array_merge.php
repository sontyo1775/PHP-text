<?php
    $arr3 = [
        'a' => 'valueA',
        'b' => 'valueB',
    ];
    $arr4 = [
        'a' => 'valueC',
        'b' => 'valueD',
        'c' => 'valueE',
    ];

    $mergedD = $arr3 + $arr4;
    $mergedE = $arr4 + $arr3;

    $mergedF = array_merge($arr3, $arr4);
    $mergedG = array_merge($arr4, $arr3);

?>

<p>●配列の合成結果</p>
* merged A: <pre><?php print_r($mergedD) ?></pre>
* merged B: <pre><?php print_r($mergedE) ?></pre>
* merged C: <pre><?php print_r($mergedF) ?></pre>
* merged D: <pre><?php print_r($mergedG) ?></pre>