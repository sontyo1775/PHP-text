<?php declare(strict_types=1); ?>

<?php
//  ユーザー向けの　その他一覧
define('EXTRA_PRINT_MODE_USER', 1);
//  販売次号者向けの　その他一覧
define('EXTRA_PRINT_MODE_VENDOR', 2);

// クロージャ―でなく、整数型の$extraPrintModeを引数として受け取っています。
function printPurchased(array $items, int $extraPrintMode): void
{
    print '<table border="1">';
    print '<tr>';
    print '<th>購入日</th>';
    print '<th>商品名</th>';
    print '<th>価格</th>';
    print '<th>その他</th>';
    print '</tr>';

    foreach($items as $item)
    {
        print '<tr>';
        print '<td>' . $item['date']. '</th>';
        print '<td>' . $item['name']. '</th>';
        print '<td>' . $item['price']. '</th>';

        $extraData = '';
        if($extraPrintMode === EXTRA_PRINT_MODE_USER)
        {
            $extraData = '色：' . $item['color'] . 'サイズ' . $item['size'];
        }
        elseif($extraPrintMode === EXTRA_PRINT_MODE_VENDOR)
        {
            $extraData = '商品' . $item['item-number'] . '製造番号　：' . $item['serial'];
        }
        print '<td>' . $extraData . '</td>';
        print '</tr>';
    }

    print '</table>';
}
// メインルーチン
$items = [
    [
        'user-id' => 'tanaka-1234',
        'date' => '2018-22-21',
        'name' => 'ドレスシャツ',
        'price' => '2160',
        'color' => 'white',
        'size' => 'M',
        'item-number' => '91025',
        'serial' => 'PLG01219',
    ],
    [
        'user-id' => 'tanaka-1234',
        'date' => '2018-09-05',
        'name' => 'キッズパジャマ',
        'price' => '1620',
        'color' => 'red',
        'size' => '110',
        'item-number' => '90081',
        'serial' => 'ZAQ80124',
    ],

];

print 'ユーザー向け購入履歴ページを出力します。';
printPurchased($items, EXTRA_PRINT_MODE_USER);

print 'ユーザー向け購入履歴ページを出力します。';
printPurchased($items, EXTRA_PRINT_MODE_VENDOR);