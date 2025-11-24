
<?php
$con  = mysqli_connect("localhost"  , "root" , "" , "php_prac");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<?php
if(isset($_POST['search'])){
    $search = $_POST['search'];
}
else{
    $search = "";
}
?>
<body>
     <div class="container">
        <div class="row">
            <div class="col-6">
                <form method = "post">
                    <input type="search" name="search" placeholder = "search as name , course , enrolled date" class = "form-control" value = "<?php echo $search;?>">
                    <button class = "btn btn-secondary" name = "btn_search">Search</button>
                </form>
                <?php
if(isset($_POST['btn_search'])){
    $search = $_POST['search'];
    // echo $search;
}?>
            </div>
        </div>
     </div>
     <table class = "table">
<tr>
    <th>S_no</th>
    <th>Name</th>
    <th>Course</th>
    <th>Enrolled date</th>
</tr>
     <?php
     if(isset($_POST['btn_search'])){
        $query = "SELECT * FROM search_box WHERE name like '%$search%' OR course like '%$search%' OR enrolleddate like '%$search%'";
     }
     else{
        $query = "SELECT * FROM search_box";
     }

     $query_run = mysqli_query($con , $query);
     $count = 1;
     while($fetch =mysqli_fetch_assoc($query_run)){
?>
 <tr>
    <td><?php echo $count?></td>
  <td><?php echo $fetch['name']?></td>
 <td><?php echo $fetch['course']?></td>
 <td><?php echo $fetch['enrolleddate']?></td>
</tr>
<?php
$count ++;
     }
     ?>
     </table>
</body>
</html>