<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP CLASS 10</title>
</head>
<body>
    <h1>PHP CLASS 10</h1>
</body>
</html>
<?php
 echo" SORT & RSORT FUNCTION<br>";
 $data = ["kashaf" , "hassan" , "areeba" , "aiman"];
 var_dump($data) ; 
 //sort use for ascending order
 sort($data);
 echo "<br>";
 var_dump($data);
 echo "<br>";
 //rsort use for desending order
 rsort($data);
    var_dump($data);

    echo"<br><br><br>ASORT & KRSORT FUNCTION<br>";
$fruit = ["f1" => "orange" , "f2" => "apple" , "f3" => "banana" , "f4" => "strawbery"];
var_dump($fruit);
echo "<br>";
//asort() Ye function array ko uski values ke according ascending order mein sort karta hai, lekin keys same rehti hain
asort($fruit);
echo "<br>";
var_dump($fruit);
echo "<br>";
//krsort() mein keys ko descending order mein sort kiya gaya.
krsort($fruit);
echo "<br>";
var_dump($fruit);


echo"<br><br><br>FOR EACH LOOP FUNCTION<br>";
$country = ["pakistan" , "india" , "dubai" , "korea" , "russia"];
foreach($country as $coun){
 echo "<p>".$coun."</p>";
}

$student_data = ["name" => "biya" , "age" => "35" , "class" => "3rd year"];
// echo "<ul>";
//  foreach($student_data as $stu){
//     echo "<li>".$stu."</li>";
//  }
//  echo "</ul>";


echo "<ul>";
 foreach($student_data as $key=> $value){
    echo "<li>".$key." : ".$value."</li>";
 }
echo "</ul>";
?>