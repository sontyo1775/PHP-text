<?php declare(strict_types=1); ?>
<body>
<?php
    print '変更前の文字コード：' . mb_internal_encoding() . '<br>';
    
    mb_internal_encoding('SJIS-Win');
    
    print '変更後の文字コード :' . mb_internal_encoding() . '<br>';
?>
</body>
