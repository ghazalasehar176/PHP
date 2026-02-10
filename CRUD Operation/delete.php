<?php
include("db.php");

echo "User Id is: ".$_GET["id"];

$id = $_GET['id'];
$query = "DELETE FROM user WHERE id = $id";
$queryRun = mysqli_query($con , $query);

header("Location:read.php");

?>