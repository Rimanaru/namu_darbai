<?php
require_once "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



$pdo = new PDO("mysql:host=localhost;dbname=namu_darbu_baze", "root","");
$sql = "INSERT INTO messages (gavejas, subject, text) VALUES (:gavejas,:subject,:text)";
$sth = $pdo->prepare($sql);
$mail = new PHPMailer(true); // Passing `true` enables exceptions
try {   
                
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.mailgun.org';  
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'postmaster@sandboxb6c596077ab145f7bb90a3815c62b901.mailgun.org';                 // SMTP username
    $mail->Password = '36106a63f94de6584675c4e8d451262f-e89319ab-bf80b02d'; // SMTP password    
    $mail->Port = 587; // TCP port to connect to
    $mail->isHTML(true);     
    //is kur laiskas
    $mail->setFrom('rima.naruseviciute@gmail.com');
 // Add a recipient
    if(isset($_POST["gavejas"])){
        
     $mail->addAddress=$_POST["gavejas"]; //cia priskiriu is input gaveja
             }
          
      
     //Kam atsakyti
     $mail->addReplyTo('noreply@noreply.re', 'No reply');
     //Content    
         if(isset ($_POST['subject'])){
     $mail->Subject=$_POST['subject']; //is input tema
 };    
    
     if(isset ($_POST['text'])){
     $mail->Body=$_POST['text']; //is erea textas
 };
     //send mail
      
     $data=[
        "gavejas" => $_POST["gavejas"],
        "subject" => $_POST["subject"],
        "text" => $_POST["text"]]

    $sth->execute($data); //kodel sitas nepatinka?
     $mail->send();
       // cia masyvas, kuri reikia ikelti, pries tai prisijungiau ir sukuriau nauja PDO
                    
                 
                

      
        header("Location:index.php");      
    
} catch (Exception $e) {
    echo 'Nedaskrido balandziai <img draggable="false" class="emoji" alt="🙁" src="https://s.w.org/images/core/emoji/2.4/svg/1f641.svg"> Mailer Error: ', $mail->ErrorInfo;
};