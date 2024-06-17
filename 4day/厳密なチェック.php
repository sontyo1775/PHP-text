<?php
    declare(strict_types=1);
?>
<body>
<pre>
    <?php
        function add(int $a,int $b, ?string &$errorMessage ) : int
        {
            // コメントアウト外すと文字列を返すためエラーになる。
            // return 'abc';

            if($a <= 0 || $b <= 0)
            {
                $errorMessage = 'err : 正の整数を指定してください。';
            }

            $total = $a + $b;
            return $total;
        }

// メインルーチン
        $errorMessage = NULL;
        $result = add(3,10, $errorMessage);
        print '計算結果　：　' . $result . $errorMessage . '<br>';

        $errorMessage = NULL;
        $result = add(3,-4, $errorMessage);
        print '計算結果　：　' . $result . $errorMessage . '<br>';
        
        // コメントアウト外すと型が違うためエラーになる。
        // $errorMessage = NULL;
        // $result = add('3',10, $errorMessage);

        // $errorMessage = NULL;
        // $result = add(true,10, $errorMessage);
       
    ?>
</pre>
</body>
