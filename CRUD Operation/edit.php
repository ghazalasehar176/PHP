<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit User</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("db.php");
    $id = $_GET['id'];
    echo "User id is: ".$id;

    $query = "SELECT * from user WHERE id = $id";
    $queryRun = mysqli_query($con, $query);
    $fetch = mysqli_fetch_assoc($queryRun);


    ?>
   <div class="card-box">
    <h2>Edit User</h2>

    <form method="post">
        <input type="text" class="form-control mb-3" name="name" value="<?php echo $fetch['name']; ?>">
        <input type="email" class="form-control mb-3" name="email" value="<?php echo $fetch['email']; ?>">
        <input type="text" class="form-control mb-3" name="phone" value="<?php echo $fetch['phone']; ?>">
        <input type="text" class="form-control mb-3" name="cnic" value="<?php echo $fetch['cnic']; ?>">
        <textarea name="address" class="form-control mb-3"><?php echo $fetch['address']; ?></textarea>

        <button class="btn-submit w-100" name="btn_update">Update</button>
    </form>
</div>

</body>

</html>

<?php
if (isset($_POST["btn_update"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];

    $query = "UPDATE user SET 
        name = '$name',
        email = '$email',
        phone = '$phone',
        cnic = '$cnic',
        address = '$address'

        WHERE id = '$id'
    ";

    $queryRun = mysqli_query($con , $query);

    if($queryRun){
        echo "<script>alert('User Updated Succesfully')</script>";
        header("Location:read.php");
    }
}
?>