<?php

function selects($items)
{
    foreach($items as $item)
    {
        // jpg , gif , png があればそれを返す。見つかった瞬間k関数処理は終わり。
        if($item == 'jpg' || $item == 'gif' || $item == 'png')
        {
            return $item;
        }
    }
    // return 処理が上で処理されなかったらこの return がやっと処理される。
    return 'NOT FOUND';
}
$items = ['pdf', 'docx', 'gif', 'exe'];
$i = selects($items);
print $i;