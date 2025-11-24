<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign Up!</title>
  </head>
  <body>
     <?php
     require '_nav.php';
     include '_db.php';
     ?>

     <?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){
      // $_SERVER Yeh ek PHP ka superglobal variable hai.

      //REQUEST_METHOD Yeh $_SERVER ka ek key hai. Yeh batata hai form kis method se bheja gaya — GET ya POST

      // if($_SERVER["REQUEST_METHOD"] == "POST") Yeh check karta hai kya form POST method se bheja gaya hai. Chahe koi bhi button click kare

      //if(isset($_POST['btn_submit'])) Yeh check karta hai kya specific button jiska name "btn_submit" hai, click hua hai ya nahi.
        $username = $_POST['username'];
        $password  = $_POST['password'];
        $cpassword  = $_POST['cpassword'];



         $query_user = "SELECT * FROM login_system WHERE username = '$username'";
        $result = mysqli_query($con , $query_user);
        $query_exist = mysqli_num_rows($result);
        if($query_exist > 0){
             echo '<div class="alert alert-danger" role="alert">
                  Username Already Exist
                       </div>';
        }
        else{
            if($password == $cpassword){
          $query = "INSERT INTO login_system(username , password , cpassword )VALUES('$username' , '$password' , '$cpassword')";
          $query_run = mysqli_query($con , $query);
          if($query_run){
           echo '<div class="alert alert-success" role="alert">
                   signin succesfully
                       </div>';
          }
        }
         else{
              echo '<div class="alert alert-danger" role="alert">
                    password do not match
                     </div>';
          }
        }
       
     }
     ?>


     <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-6">
                <h3 class="text-center">SignUp to our website</h3>
        <form method = "post">

  <div class="mb-3">
    <label for="username" class="form-label">Username </label>
    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name = "username">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

   <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
       <div id="emailHelp" class="form-text">Make sure to type the same password</div>
  </div>

  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
            </div>
        </div>

     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>