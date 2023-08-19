<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";



$con = mysqli_connect($servername, $username, $password, $dbname);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include "UserInformation.php";


  //validation
  


  //END VALIDATION


if (isset($_POST['submit'])) {



  $ip=$_SERVER['REMOTE_ADDR']; 
  //echo $ip;

  $name = $_POST['full_name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $subject = $_POST['Subject'];
  $message = $_POST['message'];
  $to = 'dileepkushwaha8090@gmail.com';
  //mail


  //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function


  //Load Composer's autoloader
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'codingcommunity.in@gmail.com'; //SMTP username
    $mail->Password = 'mybbojyyelkyvzkx'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('codingcommunity.in@gmail.com', 'contect Form');
    $mail->addAddress('dileepkushwaha8090@gmail.com', 'job task'); //Add a recipient


    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Contect Form';
    $mail->Body = 'Sender Name : ' . $name . '<br>' . 'Sender Email : ' . $email . '</br>' . ' Sender Number - ' . $number . '<br>'. 'Sender subject ; '.$subject. '<br>'.'Sender message : '.$message;
    //$mail->Body =
      $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Form Validation</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Form Validation</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
          
          <li class="nav-item dropdown">
            
           
          </li>
          
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container my-4">
    <form action="succes.php" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">full Name</label>
        <input type="full_name" class="form-control" name="full_name" id="exampleFormControlInput1" placeholder="full_name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
        <input type="number" class="form-control" name="number" id="exampleFormControlInput1" placeholder="Number">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="email">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Subject</label>
        <input type="Subject" class="form-control" name="Subject" id="exampleFormControlInput1" placeholder="Subject">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>