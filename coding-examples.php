<!-- HTML head -->
<?php include "./inc/head.php" ?>

  <body>
<!-- Navbar -->
<?php include "./inc/navbar2.php" ?>



<div class="coding-examples-container">
      <div class="coding-examples-hero">
<!-- Added gradient div to make the background darker and text be easily readable -->
        <div class="gradient-div"></div>
        <h1>Coding Examples</h1>
      </div>

<!-- CODING EXAMPLES -->
      <div id="coding-link" class="coding-examples-content-container">
        

<!-- Coding example 1 -->
        <div class="coding-example-1 coding-example">
          <h4 class="coding-title">jQuery plugin for typing effect for the brand text</h4>
          <p class="coding-text coding-text-1">I used this code to implement a typing effect to the brand text on my portfolio website. I decided to go with a jQuery plugin which worked perfectly. It is a little line of code that does the job. There are many options in the plugin which can customise it as required. It is easy to use and user friendly plugin and most importantly works in Internet Explorer. I used jQuery because the code is short and easy to implement. 
          </p>
          <pre class="coding-snippet-1 coding-snippet"> 
  var app = document.getElementById('app');
  var typewriter = new Typewriter(app, {
    loop: false,
    cursor: "",
    delay: 90
  });

  typewriter.typeString
  ("&lth1>My Name is Angel Angelov&lt/h1>")
  .pauseFor(50).typeString
  ('&lth2 class="strapline">I\'m a Web 
  Developer').start();
          </pre>              
        </div>


<!-- Coding example 2 -->
        <div class="coding-example-2 coding-example">
          <h4 class="coding-title">JavaScript function to show/hide button in the projects page</h4>
          <p class="coding-text coding-text-2">That was my first function in JavaScript. I created it in order to make the button in my projects page change and show additional information about my projects. It basically toggles in order to show or hide the additional information. 
          </p>
          <pre class="coding-snippet-2 coding-snippet">
  function MoreInfoFunction1() {
    if (textHolder1.style.display === 'block') {
      moreInfoButton1.innerHTML = 'More Info...';
      textHolder1.style.display = 'none';
  } 
    else { 
      moreInfoButton1.innerHTML = 'Close';
      textHolder1.style.display = 'block';
  }
  };
            </pre>
          </div>


<!-- Coding example 3 -->
        <div class="coding-example-3 coding-example">
          <h4 class="coding-title">SQL query</h4>
          <p class="coding-text coding-text-3"> I had a database I had to work with. The objective of the task was to extract information about employees based on certain criteria. I added a query to the SQL Employee database to list all employees with their names, role, hire date and salary as long as the salary is higher than the salary of one particular employeee - 'ADELYN'. I used subquery to make SQL compare the salaries and show only the employees with a higher salary than this value. After that I added an additional condition to the query which is to show only employees hired between 1991-06-01 and 1998-01-01. At the end I have sorted the output in ascending order (default) based on the salary.
          <br>
          <br>
            The outcome shows all employees meeting the criteria. I have tried without the hire_date condition and the query returns 6 employees. After adding the hire_date condition it returns only 4.
          </p>
          
          <pre class="coding-snippet-3 coding-snippet">  SELECT emp_name AS Employee, job_name AS Role, 
         hire_date, salary
  FROM employees
  WHERE salary > 
    (SELECT salary
      FROM employees
      WHERE emp_name = 'ADELYN')
  AND hire_date 
  BETWEEN '1991-06-01' AND '1998-01-01'
  ORDER BY salary
  ;          
          </pre>
          <table class="example-3-table">
              <tr>
                <th>Employee</th>
                <th>Role</th>
                <th>Hire Date</th>
                <th>Salary</th>
              </tr>
              <tr>
                <td>CLARE</td>
                <td>MANAGER</td>
                <td>1991-06-09</td>
                <td>2550</td>
              </tr>
              <tr>
                <td>SCARLET</td>
                <td>ANALYST</td>
                <td>1997-04-19	</td>
                <td>3100</td>
              </tr>
              <tr>
                <td>FRANK</td>
                <td>ANALYST</td>
                <td>1991-12-03</td>
                <td>3100</td>
              </tr>
              <tr>
                <td>KAYLING</td>
                <td>PRESIDENT</td>
                <td>1991-11-18	</td>
                <td>6000</td>
              </tr>
            </table>
        </div>


<!-- Coding example 4 -->
        <div class="coding-example-4 coding-example">
          <h4 class="coding-title">JavaScript Validation</h4>
          <p class="coding-text coding-text-4">I've used validationFunction() to validate the user input using JavaScript. In this example I show only two fields - first name and email but I have validated all input fields in my project. The function checks if the length of the first name input is longer than zero or, in other words, if there is anything in it. I allow any characters in this field, so if there is no input I throw an error which is to be shown to the user. The second validation here is email validation. It is a bit more complex. I have added a variable 'validation' which checks if the email is valid and then does the same as first name field. If there is an error it displays an error to the user and adds a red border to the input field in question. If the input is correctly validated I return true, the error message is hidden and the form can be submitted. 
          </p>
          <pre class="coding-snippet-4 coding-snippet">
const fname = document.getElementById('fname');
const email = document.getElementById('email');
let validation = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
const errorForm = document.getElementById
('error-message-form');

function validationFunction() {
   if (fname.value.length == 0) {
      errorForm.style.display = 'block';
      fname.style.border = "1px red solid";
      return false;
   } else if (!email.value.match(validation)) {
      errorForm.style.display = 'block';
      email.style.border = "1px red solid";
      return false;
   } else {
      errorForm.style.display = 'none';
      return true;
  }
          </pre>     
        </div>


<!-- Coding example 5 -->
        <div class="coding-example-5 coding-example">
          <h4 class="coding-title">PHP Database Connection</h4>
          <p class="coding-text coding-text-5">This is the code I used to add database connection to a page. It is a PHP code that creates instances of the PDO base class. I use my database credentials to establish the connection. There is a try/catch statement which checks if the connections has been successful and throws and error if it has not. After that it displays the error message to the user. 
          </p>
          <pre class="coding-snippet-5 coding-snippet">
$dsn = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "dbname";
$user = "user";
$pass = "password";
 
try {
    $db = new PDO("$dsn:host=$host;port=$port;
    dbname=$dbname", $user, $pass);
    $db->setAttribute (PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
    exit;
}
          </pre>            
        </div>


<!-- Coding example 6 -->
        <div class="coding-example-6 coding-example">
          <h4 class="coding-title">SQL query in PHP</h4>
          <p class="coding-text coding-text-6">I used this block of code to insert the user input to the database. I have a contact form on my page where the user types their data. Once it has been validated (by JavaScript Validation function) this function puts the data into an array which later is added to the database. It uses try/catch block again and a SQL query to insert the data. If an error is thrown is shows an error message to the user. 
          </p>
          <pre class="coding-snippet-6 coding-snippet">
function postContact($db, $contactArray) {
  try {
    $query = "INSERT INTO contact 
    (fname, lname, email, subject, message, date)
    VALUES (:fname, :lname, :email, 
    :subject, :message, :date)";

    $stmt = $db->prepare($query);
    $stmt->bindParam
    (":fname", $contactArray['fname']);
    $stmt->bindParam
    (":lname", $contactArray['lname']);
    $stmt->bindParam
    (":email", $contactArray['email']);
    $stmt->bindParam
    (":subject", $contactArray['subject']);
    $stmt->bindParam
    (":message", $contactArray['message']);
    $stmt->bindParam
    (":date", $contactArray['date']);
    $stmt->execute();
    return true;
  } catch (Exception $e) {
    echo "Unable to connect - ";
    echo $e->getMessage();
    return false;
  }
}
          </pre>            
        </div>
      </div>
    </div>

  
<!--Scroll up button  -->
    <div class="scroll-up-examples">
      <a href="#" class="scroll-up-text">
      <i class="fas fa-chevron-up"></i>
      <br>
      Back To Top
      </a>
    </div>

    
<!-- Scripts -->
<?php include "./inc/scripts.php" ?>


  </body>
  </html>