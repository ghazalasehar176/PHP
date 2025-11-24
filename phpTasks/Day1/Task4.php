<!-- Question:
Ek PHP script banao jo user se ek sentence input le aur:

Har character print kare.

Total vowels count karke show kare. -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form method="post">
    <input type="text" name="sentence" placeholder="enter your sentence as u want: " class="mb-4">
    <button name="btn_check" class="btn btn-warning">Check</button>
</form>

<?php
if(isset($_POST["btn_check"])){
    $sentence = $_POST["sentence"];

    $lenght = strlen($sentence);
    $total = mb_strlen($sentence , 'UTF-8');
    $vowelCount = 0;

    for($i =0; $i<$lenght; $i++){
        $char = strtolower($sentence[$i]);

    if($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u'){
        $vowelCount ++;
    }

        echo "Character at Index $i is: $char<br>";
}
     echo "Vowel count is: ".$vowelCount."<br>";
       echo "The total character is: ".$total;
}
?>