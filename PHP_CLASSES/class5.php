<h1>function in php</h1>
<?php
function helloo(){
    echo "hello php world <br>";
}
helloo();
helloo();

echo "<br>";

//multiple time call kawa sakty hy 
function add($num1 , $num2){
    echo "the sum is : ".$num1 + $num2. "<br>";
}
add(10,20);
add(20,30);
add(100,20);
add(50,10);

echo "<br>";

function studentdata($name,$email,$address,$phonenum){
echo "name : ".$name ." :- email : ".$email ." :- address : ".$address ." :- phonenum : ".$phonenum ."<br>";
}
studentdata("abiha","abiha123@gmail.com" ,"karachi" ,"03151034230");
studentdata("ali","ali123@gmail.com" ,"islamabad" ,"03908324923");
studentdata("afroz","afroz123@gmail.com" ,"punjab" ,"03398748232");

function hello(){
    echo "hello world ";
}
function welcome(){
    
    echo "welcome students ";
    hello(); 
}
welcome();
 
?>