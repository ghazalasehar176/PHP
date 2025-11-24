<!-- operators
arithematic - , + , / , * 
assignment operator ++ , -- , += , -= , *= , /= , .=
campariosion  operator < , > , <= , >=,==,===
logical operator && , || , ! 



shortend if - else condition called ternanry operator  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php class 2 </title>
</head>
<body>
    <?php
    echo "ADDITION OF  TWO VARIABLES ";
    echo "<br>";
    $num1 = 10;
    $num2 =20;
    echo $num1 + $num2;

      
     echo "<br>";
     echo " ASSIGNMENT OPERATOR ";
    $assign =50;
    $assign ++;//add 1
    $assign --;//sub 1
    $assign +=10;// add
    $assign .= 10;//jo uper 6 aya uske agy hi 2 ajayega 

    echo "<br>" .$assign;
    
    echo "<br>";
    $text1 ="aptech";
    $text1 ="learning";
     
    echo $text1;//ye likhny ye ouput mai sirf learning ayega 

    echo "<br>";
    $text1 ="aptech";
    $text1 .="learning";
     
    echo $text1;//ye likhyny se dono text sath ajayegny pehle aptech ayega or isi ky sath learning b ajayega 

    echo "<br>";
     echo " IF - ELSE CONDITIONS ";
     echo "<br>";
    //if else condition 
    $num =2;
    if($num >0 ){
        echo "the num is positive " ;
    }
    else if ($num < 0 ){
        echo "the num is negative ";
    }
    else {
        echo "invalid number" ;
    }
    echo "<br>";
     echo " SHORT END IF ELSE CONDITION ";
    //shortend if else condition 
    $name = "aptech";
    $result = $name  == "aptech" ? "condition is true " : "condition is false";
    echo $result ;

    echo "<br>";

    $nums = 20 ;
    $result = $nums > 0 ? "the num is ".$num. " condition is true " : "the num is zero & condition is false";
    echo $result ; 

    echo "<br>";

    $name = "ghazala";
    $pass = 3214;
    $result = $name =="ghazal" && $pass == 3214 ? "login succesfully " : "invalid credential " ;
    echo $result ; 
 
    echo "<br>";
    

    $user = "d";
    $pass = 12;
    echo "<br>";
   echo "LOGIN FORM ";
   echo "<br>";
    if(($user == "admin" && $pass == 1232) || ($user == "d" && $pass == 12) || ($user == "a" && $pass == 13) ){
        echo "<script>alert('login successfully')</script>
        welcome admin
        ";
    }
    else{
        echo "invalid username & password ";
    }
    ?>
</body>
</html>