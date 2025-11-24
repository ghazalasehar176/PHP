 <?php
 include("db.php");

 $id = $_GET['id'];
echo "<h3>USER ID IS :".$id."</h3>";

$query = " DELETE from class_17 where id = $id";
$query_run = mysqli_query($con , $query);

header("location:read.php");

 ?>

 