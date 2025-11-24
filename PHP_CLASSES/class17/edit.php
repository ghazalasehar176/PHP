<!DOCTYPE html>
<html lang="en">
<head>
    <title>edit the page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    include("db.php");
    $id = $_GET['id'];
    echo " <h3>USER ID IS : ".$id."</h3>";

    $query = "SELECT * from class_17 where id = $id ";
    $query_run = mysqli_query($con , $query );
    $fetch =mysqli_fetch_assoc($query_run);
    ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method= "post">
                    <h1>EDIT USER</h1>
                <input type="text" placeholder = "enter name " name = "name" class = "form-control" value= "<?php echo $fetch['name']; ?>">
                <input type="email" placeholder = "enter email " name = "email" class = "form-control"  value= "<?php echo $fetch['email']; ?>">
                <textarea placeholder= "enter address" name="address" class="form-control"><?php echo $fetch['address']; ?></textarea>
                <input type="number" placeholder = "enter phone number " name = "phone" class = "form-control"  value= "<?php echo $fetch['phone']; ?>">
                <input type="text" placeholder = "enter cnic number " name = "cnic" class = "form-control"  value= "<?php echo $fetch['cnic']; ?>">
                <button class = "form-control btn btn-info" name= "btn_update">CREATE</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php

if(isset($_POST['btn_update'])){
    $name  = $_POST['name'];
    $email = $_POST ['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cnic  = $_POST ['cnic'];

    $query = "UPDATE class_17 SET
    name = '$name' , 
    email = '$email' , 
    address = '$address' ,
    phone = '$phone' , 
    cnic = '$cnic'  
    where id = $id";

    $query_run = mysqli_query($con , $query);

    if($query_run){
       header("location:read.php");
    }
}
    ?>

    <!-- output mai ?id=5 ya apni marzi ye id number dena zaroori hy to hi koi output ayega warna error ayega  -->