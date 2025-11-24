 <?php
 session_start();
 //Yeh line session.php file ko include kar rahi hai.
 if(!isset($_SESSION['users'])){
    session_destroy();
    header("location:login.php");
//agar koi user login nahi hai ($_SESSION['users'] set nahi hai), toh usse login page pe bhej diya jata hai.Secure page ban gaya — only logged-in users allowed.
 }
 
 ?>