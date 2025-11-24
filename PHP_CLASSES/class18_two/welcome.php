<?php
    include("session.php");
 ?>
<h1 class = "text-center">
    <i><b>welcome: </b><i>
    <?php
    echo $_SESSION['user'];

 include("db.php");

 if(isset($_POST['btn_product'])){
 $pro_name = $_POST['pro_name'];
 $price = $_POST['price'];
 $stock = $_POST['stock'];
 $description = $_POST['description'];

 $file_name = $_FILES['file']['name'];
 $tmp_name = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];

 $allow_type =['image/png' , 'image/jpeg' , 'image/jpg'];
 
 if(in_array($file_type , $allow_type)){
    $location = "image/";
    if(move_uploaded_file($tmp_name ,$location.$file_name)){
        echo "<script>alert('file uploaded successfully')</script>";
    
        echo "<img src = 'image/".$file_name."' width = '40%' height = '300px'>";
    }
     else{
        echo 'file not found';
     }
 }
 else{
    echo "upload only this type of file(png , jpg , jpeg )";
 }
 
 $query = "INSERT INTO product(pro_name, price, stock, description,file_name) 
 VALUES ('$pro_name', '$price', '$stock', '$description','$file_name')";

 $query_run = mysqli_query($con , $query);

//  if($query_run){
//     echo "succesfully uploaded";
//  }
}
    ?>
    </h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center">
            <h1><i><b>ADD PRODUCT</b><i> </h1>
                <form method= "post" enctype = "multipart/form-data">
                    <input type="text" placeholder="enter product name " name ="pro_name" class = "form-control">
                    <input type="text" placeholder="enter price " name ="price" class = "form-control">
                    <input type="number" placeholder="enter stock " name ="stock" class = "form-control">
                    <input type="text" placeholder="description" name ="description" class = "form-control">
                    <input type="file" placeholder="select image" name ="file" class = "form-control">
                    <button class= "form-control btn btn-secondary" name= "btn_product">Add Product</button>
                    <br>
                    <br>
                    <a href="read.php" class = "btn btn-light form-control">GO TO THE ALL USER DATA PAGE </a>
                    <a href="logout.php" class = "btn btn-secondary form-control">Logout</a>
                </form>
            </div>
        </div>
    </div>
 
 

