<?php declare(strict_types=1); ?>

<body>
<?php
    require_once dirname(__FILE__) . '/SomeTraitA.php';
    require_once dirname(__FILE__) . '/SomeTraitB.php';

    trait SomeTrait
    {
        private $traitProperty;
        private function traitMethod()
        {
            $this->classProperty = 'a';
        }
    }


    class SomeClass
    {
        use SomeTrait;
        {
            private $classProperty;
        }

        public function setTraitProperty()
        {
            $this->setTraitProperty = 'b';
        }
    }

    $someClass = new SomeClass();
    $someClass->setTraitProperty();
?>
</body>