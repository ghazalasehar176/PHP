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
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1>ALL USER DATA </h1>
                    <table class = "table table-info">
                        <thead >
                            <tr>
                                <th>S.no</th>
                                <th>name</th>
                                <th>email</th>
                                <th>address</th>
                                <th>phone</th>
                                <th>cnic</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT  * FROM  class_17";
                            $query_run = mysqli_query($con , $query);
//Yeh line $query mein likhi hui SQL command ko execute karti hai using the connection $con.
                            $count = 1;
//Yeh ek counter variable hai jo S.no (Serial Number) ke liye use ho raha hai.

//Yeh line ek while loop hai jo database se ek ek row utha kar $row variable mein save karta hai.

//mysqli_fetch_assoc() Database se ek row nikalna aur Us row ko associative array (key => value) ke form mein dena.
                            while ($row = mysqli_fetch_assoc($query_run)){
 //har row ke start mein ek number aata hai — jaise 1, 2, 3 
                                echo "<tr>
                                <td>".$count."</td>
                                <td>".$row['name']."</td>
                                <td>".$row['email']."</td>
                                <td>".$row['address']."</td>
                                <td>".$row['phone']."</td>
                                <td>".$row['cnic']."</td>
                             <td><a href='edit.php?id=".$row['id']."' class='btn btn-primary'>Edit</a><a href='delete.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>
                                </tr>";
                                
//count ++ add karne se Ab har row ka serial number 1, 2, 3, ... aayega.
                                $count ++ ;
                            } 
                            
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>

<a href="create.php" class = "btn btn-dark">BACK TO THE CREATE PAGE</a>