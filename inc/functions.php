<?php

require __DIR__ . '/../vendor/autoload.php';

//Prevent XSS input
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


//Add user input to the database
function postContact($db, $contactArray) {
  try {
    $query = "INSERT INTO contact (fname, lname, email, subject, message, date)
    VALUES (:fname, :lname, :email, :subject, :message, :date)";

  $stmt = $db->prepare($query);
  $stmt->bindParam(":fname", $contactArray['fname']);
  $stmt->bindParam(":lname", $contactArray['lname']);
  $stmt->bindParam(":email", $contactArray['email']);
  $stmt->bindParam(":subject", $contactArray['subject']);
  $stmt->bindParam(":message", $contactArray['message']);
  $stmt->bindParam(":date", $contactArray['date']);

  $stmt->execute();
  return true;

  } catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
    return false;
  }
}

//Function to validate the form
function validateForm() {
  $contactArray = [];
  $errorArray = [];

  if (!empty($_POST['fname'])) {
      $fname = $_POST['fname'];
  } else {
      $errorArray[] = "First name";
  }
  if (!empty($_POST['lname'])) {
    $lname = $_POST['lname'];
} else {
    $errorArray[] = "Last name";
}
  if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email = $_POST['email'];
  } else {
      $errorArray[] = "Email";
  }
  if (!empty($_POST['subject'])) {
      $subject = $_POST['subject'];
  }else {
      $errorArray[] = "Subject";
  }
  if (!empty($_POST['message'])) {
      $message = $_POST['message'];
  } else {
      $errorArray[] = "Message";
  }

  if(!empty($_POST['g-recaptcha-response'])){
    $captcha = $_POST['g-recaptcha-response'];
  } 
  if(!$captcha){
    $errorArray[] = "reCAPTCHA";
  }
  
  $secretKey = $_ENV['SECRET_KEY'];
  $ip = $_SERVER['REMOTE_ADDR'];
  // post request to server
  $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
  $response = file_get_contents($url);
  $responseKeys = json_decode($response,true);
  // should return JSON with success as true
  // if($responseKeys["success"]) {
  //         echo 'Thanks for posting comment';
  // } else {
  //         echo 'You are spammer ! Get the @$%K out';
  // }


//Select the current date/time
  $dt = new DateTime();
  $dt->setTimeZone(new DateTimeZone("Europe/London"));
  $today = $dt->format("Y-m-d H:i:s");


//Add the user input to an array if no errors
  if (empty($errorArray)) {
      $contactArray = [
      "fname" => $fname,
      "lname" => $lname,
      "email" => $email,
      "subject" => $subject,
      "message" => $message,
      "date" => $today
      ];
      return ["passed" => true, "array" => $contactArray];
  } else {
      return ["passed" => false, "array" => $errorArray];
  }
}


//Message to the user that the form has been submitted or error has occured
function createMessage($array) {
  if ($array["passed"]) {
    $message = "<p id='error-text' style='color:green;'>Form was submitted successfully!</p>";

  } else {
    $message = "Please make sure all fields are correct and checkbox is ticked! Current error: ";
    $message .= implode(", ",$array["array"]);
  }
  return $message;
}


//Function to pull the projects data from the database
function pullProjects($db) {
  try {
    $query = "
    SELECT title, link, project_files_link, image_link, text 
    FROM projects Order by importance
    LIMIT 6;
    ";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $results;
  } catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
}
}

//Sent email on form submission
//PHP mailer import classes
use PHPMailer\PHPMailer\PHPMailer;

//Composer autoloader
require_once "vendor/autoload.php";


function sendEmail() {
//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

try {
//Configure the server settings
$mail->SMTPDebug = $_ENV['SMTP_DEBUG'];                   // Enable verbose debug output
$mail->isSMTP();                        // Set mailer to use SMTP
$mail->Host       = $_ENV['SMTP_HOST'];    // Specify main SMTP server
$mail->SMTPAuth   = $_ENV['SMTP_AUTH'];               // Enable SMTP authentication
$mail->Username   = $_ENV['SMTP_USERNAME'];     // SMTP username
$mail->Password   = $_ENV['SMTP_PASSWORD'];         // SMTP password
$mail->SMTPSecure = $_ENV['SMTP_SECURE'];              // Enable TLS encryption, 'ssl' also accepted
$mail->Port       = $_ENV['SMTP_PORT'];                // TCP port to connect to


$mail->setFrom($_ENV['MAILFROM_EMAIL'], $_ENV['MAILFROM_NAME']);           // Set sender of the mail
$mail->addAddress($_ENV['MAILTO_EMAIL']);           // Add a recipient

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail->isHTML(true);                                  
$mail->Subject = "Form submission on angel-angelov.netmatters-scs.co.uk";
$mail->Body    = '<h1>You have received an email through the form on your website.</h1> <br><h2>Message contents: </h2><br><h3>From: </h3>' . $fname . " " . $lname . " - " . $visitor_email . "<br><h3>Subject: </h3>" . $subject . "<br><h3>Message: </h3>" . $message;

$mail->send();
// echo 'Message has been sent';
} catch (\Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}

