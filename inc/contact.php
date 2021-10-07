<?php
require __DIR__ . '/../vendor/autoload.php';

// Make sure the form is validated before submitting it 
        if (isset($_POST['submit'])) {
          $array = validateForm();
//Message to user that contains the errors that need to be fixed
          $message = createMessage($array); 
          if ($array["passed"]) {
            $dbSuccess = postContact($GLOBALS["db"], $array["array"]);
//Function that sends email on submit
            sendEmail();
          } 
          else {
            $errorArray = $array["array"];
          }
        }
?>

<!-- Contact form container. I have added second container for the purpose of styling and in order to make sure that it works on all screen sizes-->
      <div id="contact" class="contact">
        <div class="contact-2">

<!-- Get in touch part -->
          <div class="get-in-touch">
            <div class="get-in-touch-2">
              <h2>Get In Touch</h2>
              <ul class="contact-ul">
                <li>Interested in working together? Fill out the form below with your details or contact me with any questions you may have.</li>
                <li class="phone"><a href="tel:07553692967">07553692967</a></li>
                <li class="phone"><a href="mailto:ang.angelov88@gmail.com">ang.angelov88@gmail.com</a></li>
                <li>I'll get back to you as soon as I can. That's a promise!</li> 
              </ul>
            </div>
          </div>

<!-- Actual contact form with the fields and placeholders-->
          <div class="contact-form-div">         
            <!-- <div id="scroll-js"></div> -->
          
          <div class="message">        
            <span id="messageText">
              <?php 
              if (isset($message)) echo $message ?></span>
          <label id="error-message-form">Please make sure all fields are correct!</label>
          </div>

          <form action="/index.php" method="post" class="contact-form" onsubmit="return validationFunction()">          

            <div class="contact-form-2">
              <input id="fname" type="text" name="fname" required placeholder="First Name*" value="<?php if (isset($_POST['fname']) && isset($errorArray)) echo $_POST['fname']?>">
              <input id="lname" type="text" name="lname" required placeholder="Last Name*" value="<?php if (isset($_POST['lname']) && isset($errorArray)) echo $_POST['lname']?>">
              <input id="email" type="email" name="email" required placeholder="Email Address*" value="<?php if (isset($_POST['email']) && isset($errorArray)) echo $_POST['email']?>">
              <input id="subject" type="text" name="subject" required placeholder="Subject*" value="<?php if (isset($_POST['subject']) && isset($errorArray)) echo $_POST['subject']?>">
              <input id="message" type="text" name="message" required placeholder="Your text here...*" value="<?php if (isset($_POST['message']) && isset($errorArray)) echo $_POST['message']?>">
              <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="<?php echo $_ENV['SITE_KEY']; ?>"></div>

              <input type="submit" name="submit" id="submit-button" value="Submit">
            </div>
          </form>
        </div>
      </div>
  

      </div> 

