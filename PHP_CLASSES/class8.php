<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>ARRAY CLASS</h1>
</body>
</html>
<?php

//index array 
echo "<br>INDEX ARRAY <br>";
$array =["noor" , "hira" , "anabiya" , "maham"];
$array1 = array('1','2','3','4');
var_dump($array);

echo " <br>the name is the : ";
echo $array[1];
echo "<br>";
echo " the number is the : ";
echo $array1[3];

//associative array 
echo "<br><br>ASSOCIATIVE ARRAY";
$arr = ["name" => "ali " , "class" => "10"  ,
        "age" => "23" , "subject" => "english"];
echo "<br>";
echo $arr["name"];
echo "<br>";
echo $arr["class"];
echo "<br>";
echo $arr["age"];
echo "<br>";
var_dump($arr);



//update an array 
echo "<br><br> UPDATED ARRAY  ";
$data = ["kashaf" , "haniya" , "kubra" , "aliya" ,"esha" , "iqra"];
var_dump($data);
$data[2] = "haider ali ";
$data[5] = "iqra ali";
var_dump($data);
echo "<br>";
echo "<br>";


$data_assoc = array("name1" => "aliya" , "name2" => "ayesha" , "name3" => "fatima" , "name4" => "zainab");
var_dump($data_assoc);

$data_assoc[2] = "fatima khan ";
echo "<br>";
var_dump($data_assoc);


//add an item in array 
echo "<br>";
echo "<br>";
echo "<br>";
$var_one = ["stu1" => "zarar" , "stu2" => "salar" , "stu3" => "ayat"];
var_dump($var_one);
$var_one ["stu3"] = "ibtehaj";
$var_one ["stu4"] = "phelaj";
var_dump($var_one);

echo "<br>";
echo "<br>";
echo "<br>";

$computer = ["mouse" , "keyboard" , "mic" , "speaker"];
var_dump($computer);
$computer[] ="airpord";
$computer[] ="screen";
echo "<br>";
var_dump($computer);

echo "<br>";
echo "<br>";
echo "<br>";
$fruit= [];
$fruit[]= 'orange';
$fruit[] ='mango' ;
$fruit[] ='apple';
var_dump($fruit);

?>