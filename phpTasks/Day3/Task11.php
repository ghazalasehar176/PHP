<!-- Count Words and Reverse a String -->

<form method="post">
    <input type="text" name="text" placeholder="enter text">
    <button name="btn_check" class = "btn btn-dark">check</button>
</form>
<?php


$totalword = 0;
if(isset($_POST["btn_check"])){
    $text = $_POST["text"];

    $totalword = str_word_count($text);
    $reservedString = strrev($text);
    $firstChar = $text[0];
    $lastchar = $text[strlen($text)-1];


echo "Total word is: ".$totalword."<br>";
echo "reversed string word is: ".$reservedString."<br>";
echo "first word is: ".$firstChar."<br>";
echo "last word is: ".$lastchar;
}
?>