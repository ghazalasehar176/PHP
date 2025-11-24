<?php
$insert = false;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trip";

$con = mysqli_connect($servername , $username , $password , $dbname );

if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

    $query = "INSERT INTO sunway_trip(name, age, gender, email, phone, other, dt) 
              VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";

    if($con->query($query) === TRUE){
        $insert = true;
    } else {
        echo "ERROR: $query <br> $con->error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>TRAVEL TRIP FORM</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <p class="para_one">WELCOME TO SUNWAY TRIP FORM</p>
        <p class="para_two">Enter the detail & submit the form to confirm your seats.</p>

        <?php 
        if($insert == true){
            echo '<p class="submit_msg">Thanks for submitting your form. We are happy to see your joining us for the SUNWAY trip</p>';
        } 
        ?>

        <form action="" method="post">
            <input type="text" name="name" placeholder="Enter name" required>
            <input type="text" name="age" placeholder="Enter age" required>
            <input type="text" name="gender" placeholder="Enter gender" required>
            <input type="email" name="email" placeholder="Enter email" required>
            <input type="number" name="phone" placeholder="Enter phone number" required>
            <textarea name="other" placeholder="Enter any other information here" rows="10" cols="30"></textarea>
            <button type="submit" name="submit" class ="sub">SUBMIT</button>
        </form>
    </div>
</body>
</html>
