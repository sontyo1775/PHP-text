
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ラッキーカラー占い</title>
<!------------------------------------------------------ -- js コンテンツ ------------------------------------------------------>
    <script>
        function showLuckyColor()
        {   // 変数
            var colors, luckyColor, today, currentMonth;

            today = new Date();
            currentMonth = today.getMonth() + 1;
            document.getElementById('today').innerHTML =
                today.getFullYear() + '年' + currentMonth + '月' + today.getDate() + '日';
            colors = ['赤', '青', '黄', '白', '黒'];
            luckyColor = colors[Math.floor(Math.random() * 5)];
            document.getElementById('lucky-color').innerHTML = luckyColor;
        }
    </script>
<!------------------------------------------------------ -- js コンテンツ ------------------------------------------------------>
</head>
<body onload="showLuckyColor()">  
    <h1>本日、<span id="today"></span>のラッキーカラー</h1>
    <p>今日のラッキーカラーは「<span id="lucky-color"></span>」です！</p>
</body>
</html>