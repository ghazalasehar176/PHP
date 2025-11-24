<h1>SWITCH CASE </h1>
<?php
$day = 8;
switch($day){
    case 1:
    echo "monday" ;
    break ;
    case 2:
    echo "tuesday" ;
    break ;
    case 3:
    echo "wednesday" ;
    break ;
    case 4:
    echo "thursday" ;
    break ;
    case 5:
    echo "friday" ;
    break ;
    case 6:
    echo "saturday" ;
    break ;
    case 7:
    echo "sunday" ;
    break ;
    default:
    echo "invalid day number " ;
}
?>

<h1>CALCULATION SWITCH CASE </h1>
<?php

$num1 = 10;
$num2 = 20;
$opt = "+";

switch($opt) {
        case "+":
        echo "ADDITION : ".$num1 + $num2 ;
        break ;
        case "-":
            echo "SUBTRACTION :  ".$num1 - $num2 ;
        break ;
        case "*":
            echo "MULTIPLICATION : ".$num1 * $num2 ;
        break ;
        case "/":
            echo "DIVISION : ".$num1 / $num2 ;
        break ;
        default:
        echo "invalid  number " ;
}
?>