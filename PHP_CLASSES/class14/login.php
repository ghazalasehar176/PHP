<!DOCTYPE html>
<html lang="en">
<head>
    <title>login page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST">
    <!-- Yeh form POST method se data bhej raha hai  -->
                    <input type="text" placeholder= "enter name" name= "username" class= "form-control">
                    <input type="password" placeholder="enter password" name= "password" class="form-control">
                    <button class= "btn btn-dark form-control" name="btn_login">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
//Session start kiya gaya — taake user ki login info store ho sake.
session_start();

if(isset($_SESSION['users'])){
header("location:welcome.php");
}
//Agar koi user already login hai, to usse directly welcome.php bhej diya jayega.
//Iska matlab: login page dubara access nahi hoga jab tak logout na ho.
else{
if(isset($_POST["btn_login"])){
//Yeh check kar raha hai: kya login form ka button press hua hai?
    $username = $_POST['username'];
    $password = $_POST['password'];
//Yeh input values ko variables mein save kar raha hai.
    if($username == "ghazala" && $password == "123" || $username == "biya" && $password == "12345" ){
    echo "login successfully";
    $_SESSION['users'] = $username;
    //Session set hoga with username
    header("location:welcome.php");
    }
    else{
     echo "<script>alert('invalid username or password')</script>";
     //Alert show karega agar user/pass galat ho.
    }
    }
}
?>