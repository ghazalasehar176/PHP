<!-- Find the Highest Number in an Array -->
<?php
$array = [32,54,23,76,12,75,34,98,56,778];

if(!empty($array)){
    $largest = $array[0];

foreach($array as $value){
    if($value > $largest){
        $largest = $value;
    }
}
echo "The greatest number in the array is: ".$largest;
}
else{
    echo "The array is empty!....";
}
?>