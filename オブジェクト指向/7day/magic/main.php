<?php declare(strict_types=1); ?>
<body>
<?php
    class Task
    {
        public $name;

        private $extras = [];

        public function __set($name, $value)
        {
            $this->extras[$name]= $value;
        }

        public function __get($name)
        {
            return $this->extras[$name];
        }

    }

    $task = new Task();
    $task->name = '飛行機のチケット購入';
    $task->placeFrom = '羽田';
    $task->placeTo = '福岡';
    
    print 'タスク名 : ' . $task->name . '<br>' .  PHP_EOL;
    print '出発：' . $task->placeFrom .'<br>' .  PHP_EOL;
    print '到着' . $task->placeTo . '<br>' . PHP_EOL;

?>
</body>