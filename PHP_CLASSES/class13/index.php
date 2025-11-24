<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP CLASS 13</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
         <form method = "POST" enctype= "multipart/form-data">
<!-- Jab bhi koi form banaate ho aur usay server pe bhejna hota hai (jaise image ya file upload karni ho), toh data ko ek specific format mein bhejna zaroori hota hai. Yeh format enctype attribute decide karta hai. -->
    <input type="file"  class = "form-control mb-3" name="file">
<!-- name="file",name="btn_login" use hota hai PHP ko batane ke liye ke user ne kaunsi file bheji hai. -->
    <button class= "btn btn-dark" name ="btn_login">file upload </button>
        </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php

if(isset($_POST["btn_login"])){
//isset() ka kaam hota hai check karna ke koi variable set hai ya nahi (means ussy declare kiya gaya hai ya nahi).Yeh check karta hai ke form submit hua hai ya nahi.Jab user LOGIN button click karta hai,tabhi $_POST["btn_login"] set hota hai.
$file_name =$_FILES['file']['name'];
//$file_name se jo b file upload hogi us file ka name ajayega.
$tmp_name =$_FILES['file']['tmp_name'];
// $tmp_name mein uploaded file ka temporary path aata hai 
$file_size=$_FILES['file']['size'];
//check file size(bytes mein)
$file_type=$_FILES['file']['type'];
//$file_type uploaded file ka MIME type batata hai (e.g. image/png).
 

//yeh batari hai koon koon si file types allowed hain upload karne ke liye.
$allow_type = ["image/png" , "image/jpeg" , "image/jpg" ];


 if(in_array($file_type,$allow_type)){
//in array Check karta hai ke koi value ek array ke andar hai ya nahi, 
//file_type Yeh user ki uploaded file ka type (jaise image/png) hota hai
// , 2 [arameter ko alag krta hy..

//ye location batayi hy jaha hamari files ne ana hy 
    $location ="aptech/";

    if(move_uploaded_file($tmp_name,$location.$file_name)){
//move_uploaded_file()ek PHP function hai jo uploaded file ko temporary location se permanent location par move karta hai.
//$tmp_name: Yeh uploaded file ka temporary naam ky liye variable hota hai.
    echo "file uploaded successfully";
    echo "<img src ='aptech/".$file_name."'width ='20%'>";
    }
    else{
        echo "file not found ";
    }
 }
 else{
    echo "error : only upload [jpeg,png,jpg] type files ";
 }
 
echo $file_name;
echo "<br>";
echo $tmp_name;
echo "<br>";
echo $file_size;
echo "<br>";
echo $file_type;
}
?>