 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add to cart </title>
 </head>
 <body>
    
 </body>
 </html>
 <?php
 session_start();

 include('db.php');

$product_id =$_POST['product_id'];
$qty =$_POST['qty'];
$session_id = session_id();

// echo "product id is :".$product_id."<br> qunatity is ".$qty. "<br>sessio id is : ".$session_id ;


$query = "INSERT INTO cart (product_id,session_id,qty ) values($product_id , '$session_id', $qty)";

$query_run = mysqli_query($con , $query);

header("location:card.php");
 ?>