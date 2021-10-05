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