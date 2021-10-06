
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
// var response = grecaptcha.getResponse();
// const recaptcha = document.getElementsByClassName('g-recaptcha')[0];
let recaptcha_validation = false;

let validation = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
const errorForm = document.getElementById('error-message-form');
const submitButton = document.getElementById("submit-button");


function recaptchaCallback() {
  recaptcha_validation = true;
}

function validationFunction() {
   if (fname.value.length == 0) {
      console.log('error with fname');
      errorForm.style.display = 'block';
      fname.style.border = "1px red solid";
      return false;
   } else if (lname.value.length == 0) {
      console.log('error with lname');
      errorForm.style.display = 'block';
      lname.style.border = "1px red solid";
      return false;
   } else if (!email.value.match(validation)) {
      console.log('error with email');
      errorForm.style.display = 'block';
      email.style.border = "1px red solid";
      return false;
  } else if (subject.value.length == 0) {
      console.log('error with subject');
      errorForm.style.display = 'block';
      subject.style.border = "1px red solid";
      return false;
  } else if (message.value.length == 0) {
      console.log('error with message');
      errorForm.style.display = 'block';
      message.style.border = "1px red solid";
      return false;
  } else if (recaptcha_validation == false) {
      console.log('error with reCAPTCHA');
      errorForm.style.display = 'block';
      errorForm.innerHTML = "Make sure reCAPTCHA has been checked!"
      return false;
  } else {
      console.log('form correct');
      errorForm.style.display = 'none';
      return true;
  }
}

submitButton.addEventListener("click", validationFunction);


//Scroll the page to the form on submit
const spanContent = document.getElementById("error-text");


function checkSpanContent() {
if (!spanContent.innerHTML == "") {
  setTimeout(function() {
    window.location = (""+window.location).replace(/#[A-Za-z0-9_-]*$/,'')+"#contact"
   }
    , 1);

}
}

// submitButton.addEventListener("load", checkSpanContent());

//reCAPTCHA
// var onloadCallback = function() {
//   grecaptcha.render('html_element', {
//     'sitekey' : '6LepxbAcAAAAADFzX2tQQ_tAxZCrJ5zmzAytXnBJ'
//   });
// };




