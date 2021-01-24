<?php
//1

$a=5;
$b=7;

if($a >= 0 && $b >= 0){
    echo $a - $b;
} elseif($a < 0 && $b < 0){
    echo $a * $b;
} else{
    echo $a + $b;
}

//3
function sum($a, $b){
    return $a + $b;
}
function sub($a, $b){
    return $a - $b;
}
function mult($a, $b){
    return $a * $b;
}
function div($a, $b){
    if($b === 0){
        echo 'На ноль делить нельзя';
        return null;
    }
    return $a / $b;
}

//4
function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case 'sum':
           return sum($arg1, $arg2);
            break;
        case 'sub':
            return sub($arg1, $arg2);
            break;
        case 'mult':
            return mult($arg1, $arg2);
            break;
        case 'div':
            return div($arg1, $arg2);
            break;
        default:
            echo Error;
    }
}

//5
$currentYear = date("Y");
echo $currentYear; 

//6
function power($val, $pow){
    if($pow === 0){
        return 1;
    }
    if($pow < 0){
        return power(1 / $val, -$pow);
    }

    return $val * power($val, $pow - 1);
}

//7
function getTime(){
    function getHour(){
        if(date("H") == 1 || date("H") == 21){
          return date('H') . "час";
        } elseif((date("H") >= 2 && date("H") <= 4 ) || (date("H") >= 22 && date("H") <= 24) ){
            return date('H') . "часа";
        } elseif(date("H") >= 5 && date("H") <= 20 ){
            return date('H') . "часов";
        }
    }

    function getMinutes(){
        if(date('i') == 1){
            return date('i') . "минута";
        } elseif((date("i") >= 2 && date("i") <= 4) || (date("i") >= 22 &&  date("i") <= 24) || (date("i") >= 32 && date("i") <= 34) || (date("i") >= 42 && date("i") <= 44) || (date("i") >= 52 && date("i") <= 54)){
            return date('i') . " минуты";
        } else{
            return date('i') . ' минут';
        }
    }
    echo getHour() . getMinutes();
    return getHour() . getMinutes();
}
getTime();
?>