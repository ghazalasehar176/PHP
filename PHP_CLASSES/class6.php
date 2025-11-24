<!DOCTYPE html>
<html lang="en">
<head>
    <title>php class 6</title>
</head>
<body>
    <h1>simple function </h1>
</body>
</html>
<?php
 function hello() {
    echo "hello world " ;
 }
 function callBack() {
    hello();
    echo "this is a  function ";
 }
 callBack();


echo "<br>";
function  studentData() {
    echo "click to check student data  ";
}
function studentName(){
    studentData();
    echo "the student name is ghazala ";
}
studentName();
echo "<br>";

function greet() {
    echo "HELLO ";
}
function WelcomeUser() {
    greet();
    echo "welcome to our website ! ";
}
WelcomeUser();
?>
<h3>call back FUNCTION </h3>

<?php
function call(){
    echo "this is a call back function ";
}
function callBackk($dis) {
    $dis();
}
 callBackk('call');


 echo "<br>";

 function welcome() {
    echo "welcome to display two function ";
 }
 function helloo($calls){
    $calls();
 }
 helloo('welcome'); 
?>
<h3>VARAIABLE FUNCTION</h3>
<?php
$varone = function() {
    echo "this is a variable function"; 
};
$varone();


echo "<br>";
$varfun = function() {
    echo "Hello, this is a simple PHP callback using variable function!";
};
$varfun();
?>
<h3>error / exception handling</h3>
<?php

// try{
//     $num1=2;
//     $num2=0;
//     if($num2 == 0){
// throw new Exception ("can't divided by zero");
//     }
//     echo $num1/$num2;
// }
//     catch (Exception $exe){
//         echo "error : ".$exe->getMessage();
//     }

echo "<br>"; 

try{
$num1 = 2;
$num2 = 0;

if($num2 == 0 ){
throw  new Exception ("can't divided by zero ");
}
echo $num1/$num2;
}
catch(Exception $e){
    echo ("ERROR :").$e->getMessage();
}

echo "<br>";

function checkNum($num){
    try {
        if($num < 0 ){
            throw new Exception ("this is a negative number ");
        }
        else if($num == 0 ){
            throw new Exception ("this is zero");
        }
        echo $num ."this is a positve number ";    
    }
    
catch(Exception $ex){
    echo "error : ".$ex->getMessage() ;
}
}
?>