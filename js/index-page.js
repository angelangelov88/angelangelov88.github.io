
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


//Email validation
const email = document.getElementById('email');
let validation = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
const errorEmail = document.getElementById('error-message-email');
const submitButton = document.getElementById("submit-button");

function emailValidationFunction() {
  if (email.value.match(validation)) {
    console.log('Email correct');
    errorEmail.style.display = 'none';
    return true;
  } else {
    console.log('error with email');
    errorEmail.style.display = 'block';
    email.style.border = "1px red solid";
    return false;
  }
}

submitButton.addEventListener("click", emailValidationFunction);


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




