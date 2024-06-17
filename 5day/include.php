<body>
    <!-- ファイルパスからディレクトリ名のみを得る　dirname関数 -->
    <!-- 現在のファイル場所を参照する　___FILE__定数 -->
    <?php require_once dirname(__FILE__) . '/fail/function.php'; ?>

    <h3>柳川鯉太郎さん</h3>
    <ul>
        <li>指名：　柳川</li>
        <li>年齢：　<?= calcAge(19790401) ?> さい</li>
        <li>住まい：　東京</li>
    </ul>

    ?>
</body>