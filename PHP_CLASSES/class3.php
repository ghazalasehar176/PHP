<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SWITCH CASE </h1>
    <?php

    $num1 = 10;
    $num2 = 0;
    $opt = "/" ;

    switch($opt) {
        case "+":
        echo "the addition is : ".$num1 + $num2 ;
        break;

        case "-":
        echo "the subtraction is : ".$num1 - $num2 ;
        break;

        case "*":
        echo "the multlipication is : ".$num1 * $num2 ;
        break;

        case "/":
            if($num2 == 0 ){
                echo "num can't be divide ";
               }
               else{
                   echo "the division is : ".$num1 / $num2 ;
               }
        break;
         
        default;
        echo "invalid number ";
    }

    echo "<br>";

    $user = "bya";
    $password = 123;

    $result = $user == "biya" && $password == 123 ? "condition is true " : "condition is false " ;
    echo "<h1>".$result."</h1>";

    echo "<br>";

    $userr = "ghazaa" ;
    $pass = "176" ;

    if($userr == "ghazala" && $pass == "176" ){
    //  echo "condition is true ";
    echo "<script>alert('login successfully ')</script>";
    }
    else{
        echo "invalid credential<br>" ; 
    }


    $point = 0;
    $output = $point > 0 ? "condition is true " : "condition is false " ;
    echo $output ; 

    ?>
</body>
</html>