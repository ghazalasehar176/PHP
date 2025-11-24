<!DOCTYPE html>
<html lang="en">
<head>
    <title>sql data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    require "db.php";
    ?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1>ALL USER DATA </h1>
                <a href="create.php" class ="btn btn-dark">GO TO THE CREATE PAGE</a>
                <table class ="table table-info mt-5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>ADDRESS</th>
                            <th>PHONE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $query = "SELECT * FROM php";
                         $queryRun = mysqli_query($con , $query);

                         while($row = mysqli_fetch_assoc($queryRun)) {
                                  echo "<tr>
                                  <td>".$row['id']."</td>
                                  <td>".$row['name']."</td>
                                  <td>".$row['email']."</td>
                                  <td>".$row['address']."</td>
                                  <td>".$row['phone']."</td>
                                  </tr>";
                         }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>