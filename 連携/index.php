<?php
// 普通に変数に入れてjsに渡す
$number = 12345;

// jsonで変数に入れてjsに渡す
$numbers = [1,2,3,4];
$numbers = json_encode($numbers);

// 連想配列でjsに渡す
$items = array(
    'cat' => 'neko',
    'dog' => 'inu',
    'human' => 'ningen'
);
$items = json_encode($items);

?>
<!-- number -->
<script>
    let bar = <?php print $number; ?>;
    console.log(bar);
</script>
<!-- numbers -->
<script>
    let number = JSON.parse('<?php print $numbers ?>');
    console.log(number);
</script>
<!-- items -->
 <script>
    let items = JSON.parse('<?php print $items; ?>');
    console.log(items);

    for(let key in items) {
        console.log(key + ':' + items[key]);
    }
 </script>