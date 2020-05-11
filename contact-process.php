<?php
// adding header
include('includes/header.html');

// creating varibles
if (isset($_POST['send'])){

$to = "srujantadagoppula@gmail.com";
$subject = "New email from Fitness Gym";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['services'];
$message = $_POST['message'];

// if fileld are empty then it returns error
if(empty($name)){
  echo('Enter the name');
  exit();
}

else if(empty($email)){
  echo('Enter the email');
  exit();
}

else if(empty($phone)){
  echo('Enter the phone number');
  exit();
}

else if(empty($service)){
  echo('Select the service');
  exit();
}

else if(empty($message)){
  echo('Enter the message');
  exit();
}
// all filed are filled then it sends a mail to us
else{
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  $title = '<h3>Hello, sir! You have received a new mail via <span style="color: #3498db;">For</span><span style="color: #f1c40f;">my</span> on your awesome website!</h3>';

  $body = "$title
          <br/>
          <b>From:</b> $name
          <br/>
          <b>E-Mail:</b> $emai
          <br/>
          <b>Phone:</b> $phone
          <br/>
          <br/>
          <b>Message:</b>\n$message
          <br/>
          <br/>";

  mail($to, $subject, $body, $headers);
  header('location:success.php');

}
}
?>
