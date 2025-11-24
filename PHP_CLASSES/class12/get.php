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
                <form method = "get" action ="welcome.php"> 
<!-- action attribute ka use form data ko ek specific file (PHP) ko bhejne ke liye hota hai--->
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
//isset() ka kaam hota hai check karna ke koi variable set hai ya nahi (means ussy declare kiya gaya hai ya nahi).Yeh check karta hai ke form submit hua hai ya nahi.Jab user LOGIN button click karta hai,tabhi $_GET["btn_login"] set hota hai.
if(isset($_GET["btn_login"])) {
//Jab user form fill karke submit (LOGIN) karta hai.Tab $_GET array mein ye values chali jati hain:
$name  = $_GET['username'];
$email = $_GET['email'];
$contact = $_GET['contact'];
//or ye variable jo banaye wo print karwadeye 
echo $name."<br>";
echo $email."<br>"; 
echo $contact."<br>";
}
?>
<!-- GET:
Data URL ke through bhejata hai.
Limit of data (around 2048 characters).
Data browser ke address bar mein visible hota hai.
Use for non-sensitive data, like search queries. -->