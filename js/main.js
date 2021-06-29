
// jQuery plugin for typing effect for the brand text
var app = document.getElementById('app');
var typewriter = new Typewriter(app, {
  loop: false,
  cursor: "",
  delay: 90
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

