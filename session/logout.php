<?php
session_start();
session_unset();
//session_unset(): Ye PHP function hai jo session ke andar jitne bhi variables hain un sab ko delete (unset) kar deta hai.sirf variables ko clear karta hai
session_destroy();

echo "you have been logout";

echo "<br>";
echo "<br>";

?>