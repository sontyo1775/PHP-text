<?php declare(strict_types=1); ?>
<body>
<?php
    print '●jiji.pngをコピーしてjiji-copy1.pngを作る。<br>';
    copy('./jiji.png', './jiji-copy1.png');

    copy('./jiji-copy1.png', './jiji-copy2.png');

    rename('./jiji-copy2.png', './jiji3.png');

    unlink('./jiji3.png');

?>
</body>