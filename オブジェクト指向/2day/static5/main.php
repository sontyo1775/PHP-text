<?php declare(strict_types=1); ?> 
<body>
<pre>
<?php
    function printData(object $data) : void
    {
        print_r($data);
    }

    $data = new stdClass();

    $data->name = 'tarou';
    $data->adress = '東京';
    $data->age = 29;
    
    printData($data);
?>
</pre>
</body>