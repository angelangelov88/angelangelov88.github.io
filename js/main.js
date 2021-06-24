

// jQuery plugin for typing effect for the brand text
const txt = document.querySelector('.hero-text h1');
const txt2 = document.querySelector('.hero-text h2');

new TypeIt(".hero-text h1", {
  strings: '',
  speed: 75,
  loop: false,
  cursor: false,
  nextStringDelay: 7500| 100
}).go();

new TypeIt(".hero-text h2", {
  strings: '',
  speed: 75,
  loop: false,
  cursor: false,
  startDelay: 2600	
}).go();
















