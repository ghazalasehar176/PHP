<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    include("db.php");
    ?>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
            <h1><i><b>ALL ADD PRODUCT DATA</b><i> </h1>
                <table class="table table-success text-center">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>PRODUCT NAME </th>
                            <th>PRICE</th>
                            <th>STOCK</th>
                            <th>DESCRIPTION</th>
                            <th>FILE_NAME</th>
                            <th>DELTE & EDIT </th>
                        </tr>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM product";
                            $query_run = mysqli_query($con , $query);

                            while($add_card = mysqli_fetch_assoc($query_run)){
                          echo "<tr>
                                <td>".$add_card['id']."</td>
                                <td>".$add_card['pro_name']."</td>
                                <td>".$add_card['price']."</td>
                                <td>".$add_card['stock']."</td>
                                <td>".$add_card['description']."</td>
                                <td>".$add_card['file_name']."</td>
                                <td><a href = 'edit.php?id=".$add_card['id']."' class = 'btn btn-secondary' >CLICK TO EDIT </a><a href = 'delete.php?id=".$add_card['id']."' class = 'btn btn-light'>CLICK TO DELETE </a></td>
                                </tr>";
                                
                            }
                            
                            ?>
                            
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>