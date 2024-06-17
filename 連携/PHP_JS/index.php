<?php
// PHP->Javascript

$raw = [
    'name' => 'takashi',
    'age' => 43,
    'address' => '不定',
    'game' => '未経験'
];

$json = json_encode($raw);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <!-- PHPで生成した値をデータ属性に埋め込む -->
  <!-- htmlspecialchars(変換したい文字列やデータを指定,変換する特殊文字の種類を指定)
   を使うことで不等号、クォーテーション混じりの文字列によるエラーやXSSを防ぐ -->
  <div id="php-data" data-json='<?php echo htmlspecialchars($json, ENT_QUOTES, "UTF-8"); ?>' style="display:none;"></div>
 
  <button id="btn">ボタン</button>
  <!-- Laravel組み込みのテンプレートエンジンであるBladeを使うなら次の様になる -->
  <!-- <div id="php-data" data-json='{{ $json }}' style="display:none;"></div> -->
<script src="js/main.js"></script>
</body>
</html>