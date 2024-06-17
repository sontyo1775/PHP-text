<?php declare(strict_types=1); ?>
<?php

function printPurchased(array $items, callable $extraDataFunc): void
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
        print '<td>' . $extraDataFunc($item) . '</td>';
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

print '<h3>ユーザーのマイページ内の購入履歴</h3>';
// printPurchased($items, function($item)
// {
//     return '色 :' . $item['color'] . 'サイズ：' . $item['size'];
// });
$extraFunc1 = function($item)
{
    return '色 :' . $item['color'] . 'サイズ：' . $item['size'];
};
printPurchased($items, $extraFunc1);


print '<h3>販売事業者専用のマイページ内の購入履歴</h3>';
// printPurchased($items, function($item)
// {
//     return 'ユーザーID :' . $item['user-id'] . '商品NO.：' . $item['item-number'];
// });
$extraFunc2 = function($item)
{
    return 'ユーザーID :' . $item['user-id'] . '商品NO.：' . $item['item-number'];
};
printPurchased($items, $extraFunc2);