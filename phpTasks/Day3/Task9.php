<!-- Find Prime Numbers in Array -->
<?php
$arrays = [12,43,12,76,34,65,23,98];

foreach($arrays as $number){
if($number > 1){
    $isprime = true;
   for($i =2; $i< $number; $i++){
    if($number % $i==0){
        $isprime = false;
        break;
    }
   }

   if($isprime){
    echo $number." is prime <br>";
   }
}
}
?>


<!-- Find Prime Numbers in Array -->
 <?php
 $arrs = [12,43,11,48,23,12,65,64,68];

 foreach($arrs as $ar){
    if($ar > 1){
        $prime =true;

        for($i =2; $i<$ar ; $i++){
        if($ar % $i == 0){
            $prime = false;
            break;
            }
        }

if($prime){
    echo $ar." is prime number.\n";
}
    }
 }
 ?>