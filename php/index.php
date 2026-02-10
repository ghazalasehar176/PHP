<?php
function display(){
    echo "this is a display function<br>";
}
display();
display();

//
function sum($a,$b){
 $c = $a + $b;
 echo "<br>".$c;
}
sum(10,50);
sum(100,200);
sum(50,60);

//vararg concept
function summ(...$m){ //vararg(variable argument)
    $summ = 0 ;
    foreach($m as $n){
$summ = $summ + $n;
 
    }
    echo "<br>sum is:".$summ;
}
summ(10,50);
summ(100,200);
summ(50,60);


//
function factorial ($i){
    $f = 1; 
    while($i != 0){
            $f = $f * $i ;
            $i--;
    }
    return $f;
}
$j = factorial(5);
echo "<br>factorial is :".$j;


//string functions 
echo "<br>";
$str = "my name is ghazala sehar";
$n = strlen($str);//strlen
echo "text is :".$str;
echo "<br>length is :".$n;

$s = str_word_count($str);//str_word_count
echo "<br> the words length is :".$s;


echo "<br>";
$mystr = "helloiamsoftwareengineer";
$m_str = chunk_split($mystr , 2 , '.');//chunk_split .
echo $m_str;

echo "<br>";
$mystr = "helloiamsoftwareengineer";
$m_str = chunk_split($mystr , 2 , '*');//chunk_split *
echo $m_str;

echo "<br>";
$mystr = "helloiamsoftwareengineer";
$m_str = chunk_split($mystr , 2 , '+');//chunk_split +
echo $m_str;

echo "<br>";
$mystr = "hello i am software engineer";
$m_str = strtoupper($mystr);//strtoupper
echo $m_str;

echo "<br>";
$mystr = "hello i am software engineer llo i am software engineer llo i am software engineer llo i am software engineer llo i am software engineer";
$m_str = substr_count($mystr , "engineer");//substr_count
echo $m_str;

echo "<br>";
//array 
$arr = array("karachi" , "lahore" , "islamabad" , "muree");
print_r($arr);

for($i = 0 ; $i < count($arr); $i ++){
    $arr[$i];
    echo "<br>";
}

//date & time function in php
$d =date('l jS \of F Y h:i:s A');
echo $d;

echo "<br>";

 //local variable or scope
 function showname(){
    $name = "ali";
    echo $name;
 }
 showname();

 echo "<br>";
 //global varaible or scope
 $namee = "ahmed" ; 
function callName(){
    global $namee;
    echo $namee;
}
callName();

echo "<br>";
//static variable or scope
function countcall(){
    static $count = 0;
    $count ++;
    echo $count."<br>";
}
countcall();
countcall();
countcall();
countcall();
countcall();
countcall();


//READFILE FUNCTION
$a = readfile('readfilefunction.html');
echo $a;

echo "<br>";

//aesy likhny se end mai word length kitni hy wo b de ga 
$b = readfile('readfilefunction.txt');
echo $b;

echo "<br>";
//aesy likhny se end mai word length kitni hy wo nhi de ga 
readfile('readfilefunction.txt');
echo "<br>";


//fopen function
$fptr = fopen('readfilefunction.txt' , 'r');
echo $fptr;

echo "<br>";

//fgets
echo fgets($fptr); //1stline aygi
// echo fgets($fptr); //2nd line ayegi
// echo fgets($fptr); //3rd line aygi

echo "<br>";
 
//fread function
$content = fread($fptr , filesize('readfilefunction.txt'));
echo $content;

//fclose function
fclose($fptr);

//fgetc() file se ek character read karta hai.Used for character-by-character reading.




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "welcome to write file in php";
$ftp = fopen('myfile1.text' , 'w');// 'w' mode: agar file exist nahin karti, to create ho jayegi; agar exist karti hai to overwrite ho jayegi. 

fwrite($ftp , "this is best file\n");// fwrite() ke through jo bhi text likha jaega, woh 'myfile1.txt' mein store hoga.
fwrite($ftp , "this is one file\n");
fwrite($ftp , "this is two file\n");


$ftp = fopen('myfile.text' , 'a');
fwrite($ftp , 'this is appeand file\n');//'appeand' :mode , yani purani file ke end me naya data jorega.
fclose($ftp);

echo "<br>";
echo "<br>";

//cookies
setcookie("category" , "book" , time() + 3 , "/");
echo "the cookie has been set";

if(isset($_COOKIE['category'])){
    echo "cookies value ".$_COOKIE["category"];
}
else{
 echo "Cookei not set or cookei expire";
}

echo "<br>";
echo "<br>";

//cookeis
//         name,        value,  time,           domnain
setcookie("category" , "book" ,time() + 86400 , "/");//   / kis domain main use karna chaty hy  / ka matlab pori website mai cookei ko use karna chaty hy 

if(isset($_COOKIE['category'])){
    echo "cookei value ".$_COOKIE["category"];
}
else{
    echo "cookei not found ";
}


echo "<br>";
echo "<br>";


?>



