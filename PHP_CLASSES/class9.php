<!DOCTYPE html>
<html lang="en">
<head>
    <title>php class 9</title>
</head>
<body>
    <h1>php class 9</h1>
</body>
</html>
<?php
echo "ARRAY_SPLICE FUNCTION<br>";
$arr = array('BMW','CIVIC' , 'AUDI' , 'FARARI');
var_dump($arr);
echo "<br>";
//array_splice function ka kaam hai array ke ek hisse ko remove ya replace karna.
//end ke 2 index mai se 2 element remove kardena.
array_splice($arr , 2, 2);
var_dump($arr);


echo "<br><br><br><br>";
$name = ["ali" , "ahmed" , "sara" , "zara" , "sakina" , "siqa"];
var_dump($name);

array_splice($name , 2,2);
var_dump($name);
echo"<br>";
array_splice($name , 1,1);
var_dump($name);

echo"<br><br><br>UNSET FUNCTION<br>";
//unset function mai jo index call karegny wo gaib hojayega 
$fruit = ['apple' , 'mango' , 'orange' , 'banana'];
var_dump($fruit);
echo "<br>";
unset($fruit[2]);
var_dump($fruit);

echo"<br><br><br>";

$asso = ["stu1" => "ali" , "stu2" => "ahmer" ];
unset($asso["stu2"]);
var_dump($asso);

echo"<br><br><br>ARRAY_DIFF<br>";
//array_diff difference karta hy or jo value index mai likhengy wo remove hojayegi 
$data2 = ["name" => "kashaf" , "age" => "25" , "class" => "4"];
var_dump($data2);
echo "<br>";
$newdata = array_diff($data2 ,["25"]);
var_dump($newdata);

echo"<br><br><br>ARRAY_POP<br>";
$num =[11,22,33,44,55,66];
var_dump($num);
//array_pop function ka use last element ko remove karne ke liye kiya jata hai.
array_pop($num);
echo"<br>";
var_dump($num);

echo"<br>ARRAY_SHIFT<br>";
//array_shift function array ke first element ko remove kar deta hai.
array_shift($num);
var_dump($num);

echo"<br><br><br>IN ARRAY FUNCTION<br>";
//in_array function check karta hai ki diya gaya value array mein hai ya nahi.
$pro = ["keyboard" , "mouse" , "pc" , "laptop"] ;
 if(in_array("mouse" ,$pro)){
    echo "data found" ;
 }
 else{
    echo "data not found" ;
 }
 
?>