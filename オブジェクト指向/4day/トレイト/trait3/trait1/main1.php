<?php declare(strict_types=1); ?>

<body>
<?php
    require_once dirname(__FILE__) . '/SomeTraitA.php';
    require_once dirname(__FILE__) . '/SomeTraitB.php';

    class SomeClass
    {
        use SomeTraitA, SomeTraitB 
        {
            SomeTraitB::traitMethod insteadof SomeTraitA;
// SomeTraitA の traitMedhod を使うときは setAと別名を使う。
            SomeTraitA::traitMethod as setA;
        }

        public function setTraitProperty()
        {
            $this->traitMethod(NULL, NULL);
            print $this->traitProperty . PHP_EOL;

            $this->setA(NULL, NULL);
            print $this->traitProperty . PHP_EOL;
        }
    }

    $someClass = new SomeClass();
    $someClass->setTraitProperty();
?>
</body>