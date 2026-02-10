<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="card-box">
    <h2>Create User</h2>

    <form method="post">
        <input type="text" placeholder="Enter Name" class="form-control mb-3" name="name">
        <input type="email" placeholder="Enter Email" class="form-control mb-3" name="email">
        <input type="text" placeholder="Enter Phone" class="form-control mb-3" name="phone">
        <input type="text" placeholder="Enter CNIC" class="form-control mb-3" name="cnic">
        <textarea name="address" class="form-control mb-3" placeholder="Enter Address"></textarea>

        <button class="btn-submit w-100" name="btn_create">Create</button>
    </form>
</div>
</body>

</html>


<?php
include("db.php");

if (isset($_POST["btn_create"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $cnic = $_POST["cnic"];
    $address = $_POST["address"];

    $query = "INSERT INTO user(name , email , phone , cnic , address) values
    ('$name' , '$email' , $phone , '$cnic' , '$address')";

    $queryRun = mysqli_query($con , $query);

    if($queryRun){
        echo "<script>alert('User Created SuccessFully')</script>";
        header("Location:read.php");
    }
}
?>