<?php
$arr = [21,43,12,54,23,65,34,76,23,87];
$totalSum = 0;

for($i=0; $i<count($arr); $i++){
    $totalSum += $arr[$i];
}
if($totalSum > 50){
    echo "Sum is greater than 50 \n";
}
else{
    echo "Sum is 50 or less <br>";
}
 echo "Total Sum is: ".$totalSum;
?>