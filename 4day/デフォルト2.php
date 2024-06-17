<?php

define('default_value', 0.08);
function something($a = default_value)
{
    print $a;
}

something();