<?php require_once dirname(__FILE__) . '/if.php'; ?>

<?php

function calcAge(int $birthday) : int
{
    return (int)((date('Ymd') - $birthday) / 10000);
}
