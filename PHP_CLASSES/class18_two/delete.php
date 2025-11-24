<?php
include("db.php");
echo "<h3> USER ID IS :".$_GET['id']."</h3>";
$id = $_GET['id'];

$query ="DELETE FROM product WHERE id = $id ";
$query_run = mysqli_query($con ,$query);

header("location:read.php");
?>