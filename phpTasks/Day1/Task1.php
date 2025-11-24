<!-- Question:
Ek PHP script banao jo user se do numbers input le aur unka sum, difference, multiplication, division, aur power calculate karke show kare. -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form action="" method="post">
    <input type="number" name="num1" placeholder="enter number 1" class="form-control mb-5">
    <input type="number" name="num2" placeholder="enter number 2" class="form-control mb-5">
    <button class="form-control mb-5 btn btn-dark" name = "btn_check">Calculate</button>
</form>
<?php
if(isset($_POST["btn_check"])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    //Calculator
    $sum = $num1 + $num2;
    $diff = $num1 - $num2;
    $multi = $num1 * $num2;
    $div = $num1 / $num2;
    $pow = $num1 ** $num2;

    //Print 
    echo "The sum is: ".$sum."<br>";
    echo "The difference is: ".$diff."<br>";
    echo "The multiplication is: ".$multi."<br>";
    echo "The division is: ".$div."<br>";
    echo "The power is: ".$pow;

}

?>