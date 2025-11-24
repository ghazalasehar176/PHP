<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login page </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center">
            <h1><i><u><b>LOGIN PAGE</b></u><i> </h1>
                     <form method = "post">
                        <input type="text" placeholder = "enter name" name = "username" class = "form-control">
                        <input type="password" placeholder = "enter password" name="password" class = "form-control">
                        <button class = "btn btn-secondary form-control " name = "btn_login">Login</button>
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
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if($username ==  "biya" && $password = "bi123" || $username == "saba" &&  $password = "sa123"){
              echo  "login successfully ";
              $_SESSION['user'] = $username;
              header('location:welcome.php');
        }
        else{
            echo "<script>alert('invalid uername or password ')</script>";
        }
    }
 }
?>