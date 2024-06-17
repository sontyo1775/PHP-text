<pre>
    <?php
        $total = 0;
        $numbers = [10,2,-5,3,'abc',6,1];
        print '正の整数を対象に配列の要素を足します。' . PHP_EOL;

        foreach($numbers as $number)
        {
            if(!is_numeric($number))
            {
                print '数値でない値を検出したため計算を中断します...(対象：' . $number .')' . PHP_EOL; 
            // ここで全体の処理が終了 
                break;
            }
            if($number < 0)
            {
                print 'マイナス値は計算しません・・・（対象値： ' . $number  . '）' . PHP_EOL;
            // 処理を飛ばして次の処理にいく
                continue;
            }
            $total += $number;
        }
        print '■合計：' . $total . PHP_EOL;
    ?>
</pre>