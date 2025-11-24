<?php
session_start();
//Yeh line session ko start karti hai taake usse delete kiya ja sake.

session_destroy();
//Yeh puri session memory ko destroy kar deta hai.
header("location:login.php");
//Jaise hi session destroy hota hai, user ko login page par wapas bhej diya jata hai.
?>