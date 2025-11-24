<!--Question:
Ek PHP script banao jo user se ek number input le aur check kare ke wo number even hai ya odd.  -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="" method="post">
    <input type="number" name="num" placeholder="enter your number: " class="mb-5"> <br>
    <button class=" btn btn-dark" name="btn_check">Check</button>
</form>

<?php
if(isset($_POST["btn_check"])){
    $num = $_POST["num"];

    if($num % 2 == 0){
        echo "The number is even: ".$num."<br>";
    }
    else{
        echo "The number is Odd: ".$num."<br>";
    }
}
?>