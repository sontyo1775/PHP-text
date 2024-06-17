<pre>
    <?php
        function add($a,$b)
        {
            $total = $a + $b;
            return $total;
        }

        $result = add(3,10);
        print '検索結果：'. $result . PHP_EOL;

        $result = add(5,2);
        print '検索結果：' . $result . PHP_EOL;
    ?>
</pre>