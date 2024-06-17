<?php

$a = true;
$b = false;
$c = false;
// T
var_dump($a || $b && $c);
// F
var_dump(($a || $b) && $c);

