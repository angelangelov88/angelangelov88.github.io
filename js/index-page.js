
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
const error = document.getElementById('error-message');

function emailValidationFunction() {
  if (email.value.match(validation)) {
    console.log('Email correct');
    error.style.display = 'none';
    return true;
  } else {
    console.log('error with email');
    error.style.display = 'block';
    return false;
  }
}

document.getElementById("submit").addEventListener("click", emailValidationFunction);





