<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Read User</title>
     <link rel="stylesheet" href="style.css">
    <?php
        require("db.php");
    ?>
</head>
<body>
<div class="table-container">
    <div class="d-flex justify-content-between mb-3">
        <h3>All Users</h3>
        <a href="create.php" class="btn btn-submit">+ Create</a>
    </div>

    <table class="table table-striped table-bordered text-white">
        <thead>
            <tr>
                <th>S No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>CNIC</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
                   <tbody>
                    <?php
                        $query = "SELECT * FROM user";
                        $queryRun = mysqli_query($con , $query);
                        $count = 1;

                        while($row = mysqli_fetch_assoc($queryRun)){
                            
                         echo "<tr>
                            <td>".$count."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['phone']."</td>
                            <td>".$row['cnic']."</td>
                            <td>".$row['address']."</td>

                            <td>
                            <a href = 'edit.php?id=".$row['id']."' class = 'btn btn-primary'>Edit</a>
                            <a href = 'delete.php?id=".$row['id']."' class = 'btn btn-danger'>Delete</a>
                            </td>

                        </tr>";

                        $count ++;
                        }
                    ?>
                   </tbody>
                </table>
            </div>
     
</body>
</html>