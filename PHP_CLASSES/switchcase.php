<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h2>STUDENT MARKSHEET</h2>
    <?php
$sub1 = 3;
$sub2 = 5;
$sub3 = 8;
$sub4 = 10;
$sub5 = 99;

$totalmarks = $sub1 + $sub2 +$sub3 +$sub4 +$sub5;
$percentage = ($totalmarks / 500) * 100;

switch(true){
     case ($percentage >=80):
     echo "GRADE IS :A+";
     break;
     case ($percentage >=70) :
     echo "GRADE IS : A";
     break;
     case  ($percentage >=60) :
     echo "GRADE IS : B";
     break;
     case  ($percentage >=50) :
     echo "GRADE IS : C";
     break;
     case  ($percentage >=40) :
     echo "GRADE IS :D";
     break;
     case  ($percentage <40):
     echo "GRADE IS : FAILED";
     break;
 
                           
} 
echo "<br>TOTALMARKS IS : ".$totalmarks ;
echo "<br>PERCENTAGE IS : ".round($percentage)."%";
 ?>
 </body>
 </html>
  