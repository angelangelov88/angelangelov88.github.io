<?php

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
    $message = "Error: please enter a valid ";
    $message .= implode(", ",$array["array"]);
  }
  return $message;
}


//Function to pull the projects data from the database
function pullProjects($db) {
  try {
    $query = "
    SELECT title, link, project_files_link, image_link, text 
    FROM projects Order by date 
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
$mail->SMTPDebug = false;                   // Enable verbose debug output
$mail->isSMTP();                        // Set mailer to use SMTP
$mail->Host       = 'smtp.sendgrid.net;';    // Specify main SMTP server
$mail->SMTPAuth   = true;               // Enable SMTP authentication
$mail->Username   = 'apikey';     // SMTP username
$mail->Password   = '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';         // SMTP password
$mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
$mail->Port       = 587;                // TCP port to connect to


$mail->setFrom('angel.angelov@netmatters-scs.com', 'Website form feedback');           // Set sender of the mail
$mail->addAddress('angel.levski@gmail.com');           // Add a recipient

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail->isHTML(true);                                  
$mail->Subject = "Form submission on angel-angelov.netmatters-scs.co.uk";
$mail->Body    = '<h1>You have received an email through the form on your website.</h1> <br><h2>Message contents: </h2><br><h3>From: </h3>' . $fname . " " . $lname . " - " . $visitor_email . "<br><h3>Subject: </h3>" . $subject . "<br><h3>Message: </h3>" . $message;

$mail->send();
//echo 'Message has been sent';
} catch (\Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}

