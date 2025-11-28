<!-- Secret Code Generator -->
<?php
$sentence = "I love promming";
$sentence .= " ";
$word = "";
$result = "";

for($i =0; $i<strlen($sentence); $i++){
   
    if($sentence[$i]  != " "){
        $word .= $sentence[$i];
    }else{
        if($word != ""){
            //first letter uppercase
            $word[0] = strtoupper($word[0]);

            //last letter replace with "*"
            $word[strlen($word)-1] = '*';

            //Add to result with space
            $result .= $word . " ";
        }
        $word = "";
    }
}

echo "secret Sentence is: ".$result;

?>