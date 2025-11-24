<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP MAILER </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
<h1>GET IN TOUCH</h1>
<form method="post">
    <input type="text" class="form-control mb-3" placeholder= "enter name" name = "name">
    <input type="text" class="form-control mb-3" placeholder= "enter email" name = "email">
    <input type="int" class="form-control mb-3" placeholder= "enter phone" name = "phone">
    <input type="text" class="form-control mb-3" placeholder= "enter message" name = "message">
    <button class = "form-control btn btn-dark" name = "btn_email">SEND EMAIL</button>
</form>
            </div>
        </div>
    </div>
</body>
</html>
<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';//exact folder name 
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function sendEmail($name, $email , $phone , $message){
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                      
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'ghazalasehar644@gmail.com';   
    $mail->addAddress('kashafhafeez53@gmail.com');                 
    $mail->Password   = 'xntq siik cxmt ntrl';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
    $mail->Port       = 465;  


     //Recipients
     $mail->setFrom('ghazalasehar644@gamil.com', 'ghazala');
     $mail->addAddress('ghazalasehar644@gmail.com', 'ghazala sehar');
     $mail->addReplyTo($email, $name);


     //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'GHAZALA SEHAR (testing)';
    $mail->Body    = '<img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt_pXuPL5b-gwdlfTL-ELUsfB_Yi_SxIWJ7A&s"><p style = "text-align:center;"><br>NAME :'.$name.'<br>EMAIL: '.$email.'<br>PHONE :'.$phone.'<br>subject: '.$message.'</p>';

 if($mail->send()){
    "<script>alert('message has been sent ')</script>";
 }

}
if(isset($_POST['btn_email'])){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    sendEmail($name , $email , $phone , $message);
}

?>
