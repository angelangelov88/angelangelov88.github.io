
// jQuery plugin for typing effect for the brand text
var app = document.getElementById('app');
var typewriter = new Typewriter(app, {
  loop: false,
  cursor: "",
  delay: 50
});

typewriter.typeString('<h1>My Name is Angel Angelov</h1>').pauseFor(50).typeString('<h2 class="strapline">I\'m a Web Developer').start(); 



//Code for the More info button in projects
(function showText(){
  var buttons = document.getElementById('portfolio-link').getElementsByTagName('button');
    for (i = 0; i < buttons.length; i++) {
      buttons[i].addEventListener('click', function (e)  {
        e.target.nextElementSibling.classList.toggle('shown');
        if (e.target.innerHTML === 'Close') {
          e.target.innerHTML = 'More Info...';
        }
        else {
          e.target.innerHTML = 'Close';
        }
      });
    };
})();


//Form validation
const email = document.getElementById('email');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const subject = document.getElementById('subject');
const message = document.getElementById('message');

let recaptcha_validation = false;

let nameRegex = /^[a-z0-9]+$/i;
let validation = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
const errorForm = document.getElementById('error-message-form');
const submitButton = document.getElementById("submit-button");

//Variable set to false on load and change to true if error occurs
let errorDisplay = false;

function recaptchaCallback() {
  recaptcha_validation = true;
}

function validationFunction() {
   if (!fname.value.match(nameRegex)) {
      console.log('error with fname');
      errorForm.innerHTML = "Please make sure all fields are correct!";
      errorDisplay = true;
      fname.style.border = "1px red solid";
      // document.getElementById('messageText').style.visibility = 'hidden';
      return false;
   } else {
    fname.style.border = "1px green solid";
   }
   
   if (!fname.value.match(nameRegex)) {
      console.log('error with lname');
      errorForm.innerHTML = "Please make sure all fields are correct!";
      errorDisplay = true;
      lname.style.border = "1px red solid";
      // document.getElementById('messageText').style.visibility = 'hidden';
      return false;
   } else {
      lname.style.border = "1px green solid";
   }
   
   if (!email.value.match(validation)) {
      console.log('error with email');
      errorForm.innerHTML = "Please make sure all fields are correct!";
      errorDisplay = true;
      email.style.border = "1px red solid";
      // document.getElementById('messageText').style.visibility = 'hidden';
      return false;
  } else {
    email.style.border = "1px green solid";
 }
  
  if (subject.value.length == 0) {
      console.log('error with subject');
      errorForm.innerHTML = "Please make sure all fields are correct!";
      errorDisplay = true;
      subject.style.border = "1px red solid";
      // document.getElementById('messageText').style.visibility = 'hidden';
      return false;
  } else {
    subject.style.border = "1px green solid";
 }
  
  if (message.value.length == 0) {
      console.log('error with message');
      errorForm.innerHTML = "Please make sure all fields are correct!";
      errorDisplay = true;
      message.style.border = "1px red solid";
      // document.getElementById('messageText').style.visibility = 'hidden';
      return false;
  } else {
    message.style.border = "1px green solid";
 }

  if (recaptcha_validation == false) {
      console.log('error with reCAPTCHA');
      errorDisplay = true;
      errorForm.innerHTML = "Make sure reCAPTCHA has been checked!";
      // document.getElementById('messageText').style.visibility = 'hidden';
      return false;
  } 
  else {
      console.log('form correct');
      errorDisplay = false;
      fname.style.border = "1px blue solid";
      return true;
  }
}

submitButton.addEventListener("click", validationFunction);


//Scroll the page to the form on successful submit
const spanContent = document.getElementById("error-text");

function checkSpanContent() {
  if (spanContent) {
  setTimeout(function() {
    window.location = (""+window.location).replace(/#[A-Za-z0-9_-]*$/,'')+"#messageText"
   }
    , 1);
}
}


//Scroll the page to the error message. Added for small screens sizes where the message is not visible if you go to submit button. This function will scroll back to the error message to alert the user
function checkErrorMessage() {
    if (errorDisplay == true && window.innerWidth <1200) {  
    setTimeout(function() {
      window.location = (""+window.location).replace(/#[A-Za-z0-9_-]*$/,'')+"#error-small-screen" 
     } 
      , 1);
    }
  }

 submitButton.addEventListener("click", checkErrorMessage);


//Function to remove the success message after 8 sec so that the user is not confused if they want to send another request
//  setTimeout(function(){
//   document.getElementById('messageText').style.visibility = 'hidden';
// }, 8000);


//I added this JS code to make sure that the user can't resubmit the form with same details once it has been pushed to the database
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
