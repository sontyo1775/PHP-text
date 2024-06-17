<?php

function items($data) : void
{
    print '<pre>';
    var_dump($data);
    print '</pre>';
}

$data = new stdClass();

$data->name = 'なまえ';
$data->age = 43;
$data->job = 'enjingoten';

items($data);
