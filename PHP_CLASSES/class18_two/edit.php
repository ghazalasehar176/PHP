<!DOCTYPE html>
<html lang="en">
<head>
    <title>EDIT THE PAGE </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    include ("db.php");
    $id = $_GET['id'];
    echo "<h3 class= 'text-center'><i><b>PRODUCT ID IS : ".$id."</b><i></h3>";

    $query = "SELECT * FROM product where id = $id ";
    $query_run = mysqli_query($con , $query);
    $fetch = mysqli_fetch_assoc($query_run);  
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 text-center">
            <h1><i><b> EDIT THE USER</b><i> </h1>
                <form method= "post" enctype="multipart/form-data">
                    <input type="text" placeholder="enter product name " name ="pro_name" class = "form-control" values = "<?php  echo $fetch['pro_name']?>">
                    <input type="text" placeholder="enter price " name ="price" class = "form-control" values = "<?php  echo $fetch['price']?>">
                    <input type="number" placeholder="enter stock " name ="stock" class = "form-control" values = "<?php  echo $fetch['stock']?>">
                    <input type="text" placeholder="description" name ="description" class = "form-control" values = "<?php  echo $fetch['description']?>">
                    <input type="file" placeholder="select image" name ="file" class = "form-control" values = "<?php  echo $fetch['file_name']?>">
                    <button class= "form-control btn btn-secondary" name= "btn_edit">Edit Product</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
 <?php
 if(isset($_POST['btn_edit'])){
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
           echo '<p>file uploaded successfully</p>';
       
           echo "<img src = 'image/".$file_name."' width = '20%' height = '100px'>";
       }
        else{
           echo 'file not found';
        }
    }
    else{
       echo "<script>alert('upload only this type of file(png , jpg , jpeg')</script>";
    }
    
    $query ="UPDATE product SET 
            pro_name = '$pro_name' ,
             price = '$price' , 
             stock  = '$stock',
              description = '$description' , 
              file_name = '$file_name'
              WHERE id = $id"; 
   
    $query_run = mysqli_query($con , $query);

    if($query_run) {
        header("location:read.php");
        echo "edit succesfully ";
    }
 }
 ?>
