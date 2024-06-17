<?php
declare(strict_types=1); 

trait SomeTraitA
{
    private $traitProperty;
    public function traitMethod($argsl, $args2)
    {
        $this->traitProperty = 'A';
    }
}