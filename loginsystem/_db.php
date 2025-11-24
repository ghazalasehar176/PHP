<?php
$con =mysqli_connect("localhost" , "root" , "" , "harry"); 


if($con){
    echo "<h3 class = 'text-center' style = 'color:green;'>successfull connected to database</h3>";
}
else{
    die("error".mysqli_connect_error());
}
?>