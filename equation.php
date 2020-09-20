<?php

//ax + b = 0
function line($a = 0, $b = 0){
    if (is_numeric($a) && is_numeric($b)){
        if ($a != 0){
            return [-$b / $a];
        }
    }
    return [];
}


//ax^2 + bx + c = 0
function square($a = 0, $b = 0, $c = 0){
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)){
        if ($a == 0) {
            return line($b, $c);
        }
        $d = $b*$b - (4 * $a * $c);
        if ($d > 0){
            $x1 = (-$b + pow($d,1/2)) / (2 * $a);
            $x2 = (-$b - pow($d, 1/2)) / (2 * $a);
            return [$x1, $x2];
        }
        if ($d == 0){
            $x = -$b / (2 * $a);
            return [$x];
        }
        else{
            print_r('корней нет ');
        }
    }
    return[];
}

function cube($a = 0, $b = 0, $c = 0, $d = 0){
    $q = (($a * $a) - (3 * $b)) / 9;
    $r = ((2 * pow($a, 3)) - (9 * $a * $b) + (27 * $c)) / 54;
    $s = pow($q, 3) - ($r * $r);
    
    if ($s > 0){
        $fi = (1/3) * acos($r / pow($q, (3/2)))

        $x1 = -2 * sqrt($q) * cos($fi) - ($a / 3) 
        $x2 = -2 * sqrt($q) * cos($fi + ((2 * pi) / 3)) - ($a / 3)
        $x3 = -2 * sqrt($q) * cos($fi - ((2 * pi) / 3)) - ($a / 3)
    }
}