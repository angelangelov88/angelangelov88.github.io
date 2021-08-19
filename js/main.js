
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


//Side navbar
//I added variables for all the elements in order to make the code readable
const navbar = document.getElementsByClassName("navbar")[0];
const hamburger = document.getElementsByClassName('hamburger')[0];
const body = document.body;
const gradient = document.getElementsByClassName('gradient-div-brand')[0];
const fontColor = document.getElementById('app');
const scrollDisappear = document.getElementsByClassName('scroll')[0];
const blockerZindex = document.getElementsByClassName('blocker')[0];


//This is the function that is triggered on click on burger menu button. I also added if statements for the responsiveness of the screen 
function openNav() {
    navbar.style.display = 'block';
    gradient.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
    fontColor.style.color = '#ffffff9e';
    scrollDisappear.style.position = 'initial';
    blockerZindex.style.zIndex = 100;
    body.style.overflow = 'hidden';
    hamburger.style.left = '162px';
}

//This is the function that closes the sidebar on clicking anywhere on the page but the sidebar
function closeNav() {
    navbar.style.display = 'none';
    navbar.style.backgroundColor = 'none';
    gradient.style.backgroundColor = 'initial';
    fontColor.style.color = 'white';
    scrollDisappear.style.position = 'block';
    blockerZindex.style.zIndex = 0;
    body.style.overflow = 'auto';
    hamburger.style.left = '0px';
  }

hamburger.addEventListener("click", openNav);

  
function showNavbar(x) {
  if (x.matches) { // If media query matches
    navbar.style.display = 'block';
    blockerZindex.style.zIndex = 0;
    gradient.style.backgroundColor = 'initial';
    fontColor.style.color = 'white';
    scrollDisappear.style.position = 'block';
    blockerZindex.style.zIndex = 0;
    body.style.overflow = 'auto';
    hamburger.style.left = '0px';
  }  else {
    navbar.style.display = 'none';
  }
}

var x = window.matchMedia("(min-width: 767px)")
showNavbar(x) // Call listener function at run time
x.addListener(showNavbar) // Attach listener function on state changes



