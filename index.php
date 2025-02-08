<?php
    define("pi", 3.14);
    $R = 2;
    $L = 2 * pi * $R;
    $a = 2;
    $b = "2";
    $c = (string)$a.$b;
    echo gettype($a).'</br>';
    echo $c.'</br>';
    $d = $b + $a;
    echo $d.'</br>';
    $s = 3.2;
    echo 'floor'.floor($s).'</br>'; //Отсекает нецелую часть
    echo 'ceil'.ceil($s).'</br>'; //Идет дальше
    echo 'round'.round($s).'</br>'; //Округляет
    %f = 2/3;
    print "f=$f<BR>"; //f=0.6666666667
    print strlen($f)."<BR>"; //14 знаков
    $f=sprintf("%.2f",$f);
    print "f=$f<BR>"; //f=0.67
?>