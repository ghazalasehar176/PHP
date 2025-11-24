<!-- Question:
Ek PHP script banao jo user se 3 numbers input le aur determine kare ke sabse bada number kaun sa hai -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<form method="post">
<input type="number" name="num1" placeholder="Enter your number" class="mb-5">
<br>
<input type="number" name="num2" placeholder="Enter your number" class="mb-5">
<br>
<input type="number" name="num3" placeholder="Enter your number" class="mb-5">
<br>
<button class = "mb-3 btn btn-secondary" name="btn_save">Check</button>
</form>

<?php

if(isset($_POST["btn_save"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    if($num1 > $num2 && $num1 > $num3){
        echo "Number 1 is largest";
    }
    else if($num2 > $num1 && $num2 > $num3){
        echo "Number 2 is largest";
    }
    else{
        echo "Number 3 is largest";
    }
}
?>