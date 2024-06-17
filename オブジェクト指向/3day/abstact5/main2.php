<?php declare(strict_types=1); ?>
<body>
<?php
    class SuperClass
    {
        protected $data1;

        public function __construct(string $data1)
        {
            $this->data1 = $data1;
            print $this->data1;
        }
    }

    class SubClass extends SuperClass
    {
        protected $data2;

        public function __construct(string $data1, string $data2)
        {
            $this->data1 = $data1;
            $this->data2 = $data2;
            print $this->data1. '<br>' .$this->data2 . '<br>' ;
        }
    }

    $subClass = new SubClass('this is datal' , 'this is data2');
    $subClass = new SubClass('this is data1', 'a');
?>
</body>