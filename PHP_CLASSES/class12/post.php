<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP CLASS 12</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h3>GET & POST METHOD </h3>
                <form method = "post" action ="welcome1.php">
                    <!-- POST method use ki gayi hai (data ko body ke through securely bhejne ke liye). -->
                    <!-- action attribute ka use form data ko ek specific file (PHP) ko bhejne ke liye hota hai.  -->
              <!-- GET method use ki gayi hai (URL se data bhejne ke liye). -->
                <input type="text" placeholder= "enter name here " class= "form-control mb-3" name= "username" >
                <!-- name="username" PHP mein access karne ke liye use hota hy -->
                <input type="email" placeholder= "enter email here " class= "form-control mb-3" name= "email" >
                <input type="number" placeholder= "enter contact here " class= "form-control mb-3" name= "contact" >
                <input type="password" placeholder= "enter password here " class= "form-control mb-3" name= "password" >
                <button class= "form-control mb-3 btn btn-dark" name= "btn_login">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST["username"])){
$name = $_POST["username"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$password  =$_POST["password"];
echo $name. "<br>";
echo $email. "<br>";
echo $contact. "<br>";
echo $password. "<br>";
}
?>
<!-- POST:
Data body ke through bhejata hai.
No size limit for data.
Data URL mein visible nahi hota.
Use for sensitive data, like login or registration. -->