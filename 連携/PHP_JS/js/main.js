
document.addEventListener('DOMContentLoaded', function() {
    // データ属性からJSONデータを取得 getAttribute() -> 値を取得したい属性の名前
  var jsonDataElement = document.getElementById('php-data');
  var jsonData = jsonDataElement.getAttribute('data-json');

  // JSONデータをデコードしてオブジェクトに変換
  var data = JSON.parse(jsonData);
//   console.log(data);

    let btn = document.querySelector('#btn');

    function onClick() {
        alert(data.name);
    }
    btn.addEventListener('click', onClick);
});

