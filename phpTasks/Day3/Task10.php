<!-- Count Frequency of Each Number in an Array -->

<?php
$array = [54,23,76,23,98,45,23,98];

$frequency = [];

$element = 0;
for($i =0; $i<count($array); $i++){

    $element = $array[$i];
    if($frequency[$element]){
        $frequency[$element]++;
    }
    else{
        $frequency[$element] = 1;
    }
}

foreach($frequency as $key => $value){
     echo $key ." appears ".$value." times \n";
}

?>