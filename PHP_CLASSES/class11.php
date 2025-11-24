<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP CLASS 11</title>
</head>
<body>
    <h3>MULTI DIMENSTIONAL ARRAY</h3>
</body>
</html>
<?php

//Multi-dimensional array wo hoti hai jisme ek array ke andar aur arrays hote hain.
$multi_array = [["ali"   , "20" ,  "karachi" , "03387239482"],
                ["usman","10" ,  "islamabad" , "03376382113"],
                ["anaya"   , "23",  "lahore" , "03159384923"],];

                echo $multi_array[0][0];
                echo $multi_array[1][0];

                echo "<br>";
                echo "<br>";
                
                //multi assoc array
                $multi_assoc = [  'date1' => ["name" => "ali" , "age" => "12" ,"country" => "pakistan" ],
                'date2' => ["name" => "anabiya" , "age" => "23" , "country" => "iran"],
                'date3' => ["name" => "habiba" , "age" => "42" , "country" => "dubai"],];
               
                var_dump($multi_assoc);
                echo "<br>";
                echo $multi_assoc['date2']["country"];
                echo "<br>";
                echo $multi_assoc['date1']["name"];
                echo "<br>";
                echo $multi_assoc['date3']["age"];

                echo "<br>";
                echo "<br>";
                echo "<br>";



                //multi dimeensiontional array for nested for-each loop
                $array = [["arham" , '23'],
                          ["arshman", '10'],
                          ["aliya" , '12'], 
                          ["reyan" , '08'],];

                          foreach($array as $value){
                            foreach($value as $data){
                                    echo  $data."<br>";
                            }
                          }
                
                           echo "<br>";
                           echo "<br>";
                           echo "<br>";


                           for($i=1; $i<=5 ;$i++ ){
                              echo $i." - ";
                              for($j=1; $j<=10; $j++){
                                echo $j; 
                              }
                              echo "<br>";
                           }
                           echo "<br>";
                           echo "<br>";
                           echo "<br>";

                           for($m =1 ; $m<=5; $m++){
                            for($n =1; $n<=10; $n++){
                                echo $n*5;;
                                echo " ----- ";
                            }
                            echo "<br>";
                           }
?>