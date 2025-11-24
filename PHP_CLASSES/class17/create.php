<!DOCTYPE html>
<html lang="en">
<head>
    <title>CREATE USERS PAGE </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method= "post">
                    <H1>CREATE USERS</H1>
                <input type="text" placeholder = "enter name " name = "name" class = "form-control">
                <input type="email" placeholder = "enter email " name = "email" class = "form-control">
                <textarea placeholder= "enter address" name="address" class="form-control"></textarea>
                <input type="number" placeholder = "enter phone number " name = "phone" class = "form-control">
                <input type="text" placeholder = "enter cnic number " name = "cnic" class = "form-control">
                <button class = "form-control btn btn-dark" name= "btn_create">CREATE</button>
                <br>
                <br>
                <a href="read.php" class = "btn btn-dark form-control">GO TO THE ALL USER DATA PAGE </a>
                </form>
                 
            </div>
        </div>
    </div>
</body>
</html>
<?php
include("db.php");
if(isset($_POST['btn_create'])){
    $name  = $_POST['name'];
    $email = $_POST ['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cnic  = $_POST ['cnic'];


     $query = "INSERT INTO class_17(name,email ,address , phone , cnic) values ('$name','$email','$address','$phone','$cnic')";

     $query_run = mysqli_query($con,$query);
     //Yeh line $query mein likhi hui SQL command ko execute karti hai using the connection $con.
    
     if($query_run){
        echo "<script>alert('login succesfully')</script>";
     }


}
?>