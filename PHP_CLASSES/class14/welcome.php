<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
<?php
require("session.php");
//Yeh line session.php file ko include kar rahi hai.
?>
<h1>Welcome <?php
echo $_SESSION['users'];
//Yahan $_SESSION['users'] se current logged-in user ka naam display ho raha hai.
?> </h1>

<a href="logout.php" class= "btn btn-dark">LOGOUT</a>
<!-- Yeh button logout.php par le jaata hai, jahan session destroy hota hai. -->
 