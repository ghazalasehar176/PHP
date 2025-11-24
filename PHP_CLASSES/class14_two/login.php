<!DOCTYPE html>
<html lang="en">
<head>
    <title>COOKEI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method= "POST">
                    <input type="text" placeholder= "enter name " name= "name" class= "form-control ">
                    <input type="password" placeholder = "enter password" name ="password" class= "form-control">
                    <button class= "form-control btn btn-dark " name= "btn_login">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

session_start();

if(isset($_SESSION['user'])){
    header("location:welcome.php");
}
else{
    if(isset($_POST['btn_login'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        
        if($name == "aina" && $password == "123" || $name == "hiba" && $password == "12345") {
            echo  "login succesully";
            $_SESSION['user'] = $name ;
            setcookie('user' , $name , time() + 5);
            header("location:welcome.php");
        }
        else{
            echo "<script>alert('invalid username or password!! ')</script>";
        }
        }
}
?>