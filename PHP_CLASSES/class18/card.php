<!DOCTYPE html>
<html lang="en">
<head>
    <title>cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <?php
    include("db.php");
    session_start();
    $session_id = session_id();
    ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>CART</h1>
            <div class="col-12">
                <?php
                $query = "SELECT * FROM cart c
                 inner JOIN card_table p ON p.id = c.product_id
                WHERE c.session_id = '$session_id'";

                $query_run = mysqli_query($con , $query);
                while($fetch = mysqli_fetch_assoc($query_run)){
                    echo "product is is :".$fetch['product_id'].
                    "<br> the quantity is :".$fetch['qty'].
                    "<br> the session id is :".$fetch['session_id'].
                    "<br> product name is :".$fetch['pro_name'].
                    "<br><img src = 'img/".$fetch['image']."'width = '50px'>";
                    
                }
                
                
                 
                ?>
            </div>
        </div>
    </div>
</body>
</html>