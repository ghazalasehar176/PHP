<?php
session_start();

if(isset($_session['name'])){

    echo "welcome ".$_SESSION['name'];
echo "<br> your favouriate car is ".$_SESSION['favCar'];

}
else{
    echo "please login to continue";
}


echo "<br>";
echo "<br>";

?>