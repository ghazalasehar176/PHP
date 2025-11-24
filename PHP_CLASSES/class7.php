<?php

//for loop 
for ($i = 1; $i <=10 ; $i ++){
    echo $i." Aptech <br>";
}

echo "<br>";
//while loop 
 $j = 1;
while($j <=5){
echo "while loop iteration <br> ";
$j ++;
}

//do-while loop 
echo "<br>";
$k = 1; 
do {
echo "the loop  iterates in ".$k ." times.  <br>";
$k ++ ; 
}while($k <=10);


$a =1;
do{
    echo "do- ehile loop iterates ".$a."times <br>";
    $a ++;
}while($a >6 );
//error code 
?>
<h1>BREAK & CONTINUE</h1>

<?php
//break
for($m =1; $m <=10; $m ++){
    if($m == 6 ){
      break;
    }
    echo $m ."<br>";
}

echo "<br>";
//continue
for($n =1; $n <=10; $n++){
    if ($n == 5){
        continue;
    }
    echo $n."<br>";
}
?>
 