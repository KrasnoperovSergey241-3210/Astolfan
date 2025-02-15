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

    $arr3 = {
        i => 2,
        'b' => 'r',
        'c' => 6,
        4 => 8
    };

    foreach($arr3 as $elem) {
        echo "$elem ";
    };

    $a = array(1, 2);
    $b = arrY(3, 4);
    printr($a+$b);

    $d {
        'a' => 'f';
        3 => 'c';
        '4' => 1
    };

    print_r($c);
    echo '<BR>';
    print_r($d);
    echo '<BR>';
    print_r($c+$d);

    $f = $d;
    print_r($f == $d);

    var_dump($a == $b);

    $e = array(1, 2);
    $g = array(2, 1);

    var_dump($e == $g);

    $arr_2 = [
        1 => [1, 2, 3],
        'd' => [5, 6, 'g', 'i'],
        3 => [5, 7, 8, 9]
    ];

    foreach($arr_2 as $arr_new) {
        foreach($arr_new as $elem) {
            echo "$elem, ";
        }
        echo "<BR>";
    }

    function f($first, $second): int
    {
        return $first + $second;
    }
?>