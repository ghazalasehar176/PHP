 <!DOCTYPE html>
 <html lang="en">
 <head>
  <title>index page </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
  <?php
  session_start();
  $session_id = session_id();

  echo $session_id;
  ?>
 </head>
 <body>
 <?php
 include("db.php");
 ?>
 <div class="container">
  <div class="row">
    <div class="col-12 text-center">
<h1>SHOP</h1> 
 </div>
<?php
$query = "SELECT * FROM card_table";
$query_run =mysqli_query($con,$query);
while($fetch = mysqli_fetch_assoc($query_run)){
  if($fetch['stock'] > 0 ){
 $stock  = '<form action = "addtocard.php" method = "post">
  <input name= "product_id" value="'.$fetch['id'].'">
   <input name="qty" type = "number" value ="1" min = "1" max = '.$fetch['stock'].'">
   <button type = "submit">add to cart</button>
   </form>';
  }
  else{
  $stock = "OUT OF STOCK";
  }

  echo "<div  class = 'col-4'>
  <div class = 'card'>
  <img src = 'img/".$fetch['image']."' class = 'card-img-top w-50%' style = 'height:300px;'>
  <div class = 'card-body'>
  <h5 class = card-title>".$fetch['pro_name']."</h5>
   <p class = card-text>".$fetch['price']."</p>
   ".$stock."
  </div>
  </div>
  </div>";
}
?>
   
  </div>
 </div>
 </body>
 </html>
 