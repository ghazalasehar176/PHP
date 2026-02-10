<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<h3>camparison operator</h3>
<?php
define("PI" , 3.14);//constant in php


echo "the value of 1==4 is :";
echo var_dump(1==4);
echo "<br>";

echo "the value of 1!=4 is :";
echo var_dump(1!=4);
echo "<br>";

echo "the value of 1<=4 is :";
echo var_dump(1<=4);
echo "<br>";

echo "the value of 1>=4 is :";
echo var_dump(1>=4);
echo "<br>";

//constat in php. 
 echo PI ; 

 //count function in array ,count() number of element deta hy array ke andar
echo "<br>";
$array = ["python" , "c++" , "java" ,"php" , "javascript"];
echo count($array);

//for each loop 
foreach($array as $values){
    echo "<br>the value of for each loop is : ";
    echo $values;
}

echo "<br>";
//php functions 
$str = "this is pen";
echo $str. "<br>";
$lenn = strlen($str);
echo "the lenght of this string is ".$lenn. " thank you <br>";//count for a word with gap
echo "the number of word in string is ".str_word_count($str)." thank you <br>";//count for a only word in the sentence 
echo "the reversed string is ".strrev($str)." thank you <br>";//word ko reversed karyga 
echo "the search string is ".strpos($str , "is")." thank you <br>"; // finds position of first "is",Yahan "is" pehli baar position 2 par milta hai (t=0, h=1, i=2, s=3...)
echo "the replaced string is ".str_replace("is" , "at" ,$str)." thank you <br>";// replaces "is" with "at".."this is pen" → "that at pen"
?>








