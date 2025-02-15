<?php
    $arr = [2, 'r', 6, 8];
    for ($i = 0; $i < sizeof($arr); $i++) {
        echo $arr[$i].' ';
    }

    $arr2['a'] = 2;
    $arr2['b'] = 'r';
    $arr2['c'] = 6;
    $arr2['d'] = 8;
    echo $arr2[2].'<BR>';

    var_dump($arr2);
    echo '<BR>';

    for ($i = 0; $i < sizeof($arr2); $i++) {
        echo $arr2[$i].' ';
    }
?>