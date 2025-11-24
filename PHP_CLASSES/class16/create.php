<!DOCTYPE html>
<html lang="en">
<head>
    <title>create users page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center">
                <h1>CREATE USER</h1>
                <form method="POST">
                    <input type="text" placeholder="enter name " name="name" class="form-control">
                    <input type="email" placeholder="enter email " name="email" class="form-control">
                    <input type="text" placeholder="enter address " name="address" class="form-control">
                    <input type="number" placeholder="enter phone " name="phone" class="form-control">
                    <button class="btn btn-dark form-control" name="btn_create">CREATE</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php

include ("db.php");
if(isset($_POST['btn_create'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO php (name,email,address,phone) values('$name', '$email' , '$address' , '$phone')";


    $query_run = mysqli_query($con , $query);

    if($query_run){
        echo "<script>alert('create succesfully')</script>" ;
    }
}

?>
<div class="text-center mt-5">
<button class="btn btn-dark ">
 <a href="read.php" class="btn btn-dark">GO TO THE DATABSE PAGE</a>
 </button>
</div>
 