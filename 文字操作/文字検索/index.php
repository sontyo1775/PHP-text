<?php declare(strict_types=1); ?>
<body>
    <p>文字を検索(型)： mb_strpos(), mb_strrpos()</p>
    <?php
        $sentence = '今日は、良い日です。';

        // mb_strpos(対象文字列, 探したい文字, 何文字から探すか示す数値)
        var_dump(mb_strpos($sentence, '日'));  // int(1)
        var_dump(mb_strpos($sentence, '無'));  // bool(false)
        var_dump(mb_strpos($sentence, '良い日'));  //int(4)
        // 文字検索して最後に現れる文字位置を調べる
        var_dump(mb_strrpos($sentence, '日'));  // int(6)

/// ifでつかって文字検索してみる。。。。
        // if(mb_strpos($sentence, '日')) {
        //     print '引数$sentenceの中に「日」が見つかりました。';
        // } else {
        //     print '引数$sentenceの中に「日」は見つかりませんでした。';
        // }
    ?>
</body>