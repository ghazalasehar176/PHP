<?php
  echo "Hello, World!";   
  echo "<br>";
  echo "Hello", "PHP!"; // Multiple arguments
  echo "<br>";
print "Hello, World!"; 
//print "Hello", " PHP!"; // Error (Only one argument allowed)

 print "<br>";
 //php variable 
 $name ="php variable";
 $num1 = 100;
 $num2 = 200;
 echo "<p>Num1 :" .$num1. "</p>";
 echo "num2 :".$num2;
 ?>
 <h1>DATA TYPES</h1>
 <?php
 $num = 10.24; //numberdatatype
 $string = "apech learning";//string datatype
 $boolean = true;//boolean datatype
 $name = [100,"aptech", true,  90.43];
 var_dump($name);//kisi variable ki detailed information(data type aur value)ke liye use hota hai.
 echo "<br>";
 include("switchcase.php");//agar file na mily to warning deta hy
 print "<br>"; 
 require("switchcase.php");//agar file na mily to fatal error de deta hy
 ?>