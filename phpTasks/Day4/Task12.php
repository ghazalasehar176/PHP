<!-- Magic Sentence Analyzer -->
<?php
$sentence = "I love programming very much ";
$sentence .= " ";
$currentword = "";
$longest = "";
$smallest = "";


for($i =0; $i<strlen($sentence); $i++){
  
    if($sentence[$i] != " "){
        //Build current word
        $currentword .= $sentence[$i];
    }else{

    if($currentword != ""){

         if($longest == "" || strlen($currentword) > strlen($longest)){
             $longest = $currentword;
             }
        if($smallest == "" || strlen($currentword) < strlen($smallest)){
            $smallest = $currentword;
             }
    }

    //Reset for next word
    $currentword = "";

    }
}

echo "Longest word is: ". $longest. "\n";
echo "Smallest word is: ".$smallest;
?>