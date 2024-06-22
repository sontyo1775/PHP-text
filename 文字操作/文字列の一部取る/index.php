<?php declare(strict_types=1); ?>
<body>
    <p>文字検索: mb_substr(), mb_strstr()</p>
    <?php
        $sentence = '今日は、良い日です';
        // mb_substr(対象の文字列, 対象の文字列を０とした開始位置(マイナスは末尾から数える), 最大何も文字得るか(nullは最後まで))
        var_dump(mb_substr($sentence, 4, 3));   // 良い日
        var_dump(mb_substr($sentence, -5, 3));  // 良い日
        var_dump(mb_substr($sentence, 4));  // 良い日です
        
        // mb_strstrt(対象となる文字列, 中から探したい文字, trueかfalse);
        // true -> 対象文字列の1文字手前まっでの部分文字列
        // false -> 探したい文字から対象文字列までを返す。
        var_dump(mb_strstr($sentence, '良', false));  // 良い日です
        var_dump(mb_strstr($sentence, '日', false));  // 日は、良い日です
        var_dump(mb_strstr($sentence, '日', true));  // 今
    ?>
</body>