

// jQuery plugin for typing effect for the brand text

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


//Code for the More info button in projects

//Variables in the more info button section 
  const moreInfoButton1 = document.querySelector('.more-info-btn-1');
  const moreInfoButton2 = document.querySelector('.more-info-btn-2');
  const moreInfoButton3 = document.querySelector('.more-info-btn-3');
  const moreInfoButton4 = document.querySelector('.more-info-btn-4');
  const moreInfoButton5 = document.querySelector('.more-info-btn-5');
  const moreInfoButton6 = document.querySelector('.more-info-btn-6');

  const textHolder1 = document.querySelector('.text-holder-1');
  const textHolder2 = document.querySelector('.text-holder-2');
  const textHolder3 = document.querySelector('.text-holder-3');
  const textHolder4 = document.querySelector('.text-holder-4');
  const textHolder5 = document.querySelector('.text-holder-5');
  const textHolder6 = document.querySelector('.text-holder-6');


//Function to change the button text and show/hide the pop up text
moreInfoButton1.onclick = function() {MoreInfoFunction1()};
moreInfoButton2.onclick = function() {MoreInfoFunction2()};
moreInfoButton3.onclick = function() {MoreInfoFunction3()};
moreInfoButton4.onclick = function() {MoreInfoFunction4()};
moreInfoButton5.onclick = function() {MoreInfoFunction5()};
moreInfoButton6.onclick = function() {MoreInfoFunction6()};




function MoreInfoFunction1() {
  if (textHolder1.style.display === 'block') {
    moreInfoButton1.innerHTML = 'More Info...';
    textHolder1.style.display = 'none';
} 
   else { 
   //(textHolder.style.display === 'block')  
    moreInfoButton1.innerHTML = 'Close';
    textHolder1.style.display = 'block';
}
};


function MoreInfoFunction2() {
  if (textHolder2.style.display === 'block') {
    moreInfoButton2.innerHTML = 'More Info...';
    textHolder2.style.display = 'none';
} 
   else { 
   //(textHolder.style.display === 'block')  
    moreInfoButton2.innerHTML = 'Close';
    textHolder2.style.display = 'block';
}
};

function MoreInfoFunction3() {
  if (textHolder3.style.display === 'block') {
    moreInfoButton3.innerHTML = 'More Info...';
    textHolder3.style.display = 'none';
} 
   else { 
   //(textHolder.style.display === 'block')  
    moreInfoButton3.innerHTML = 'Close';
    textHolder3.style.display = 'block';
}
};

function MoreInfoFunction4() {
  if (textHolder4.style.display === 'block') {
    moreInfoButton4.innerHTML = 'More Info...';
    textHolder4.style.display = 'none';
} 
   else { 
   //(textHolder.style.display === 'block')  
    moreInfoButton4.innerHTML = 'Close';
    textHolder4.style.display = 'block';
}
};

function MoreInfoFunction5() {
  if (textHolder5.style.display === 'block') {
    moreInfoButton5.innerHTML = 'More Info...';
    textHolder5.style.display = 'none';
} 
   else { 
   //(textHolder.style.display === 'block')  
    moreInfoButton5.innerHTML = 'Close';
    textHolder5.style.display = 'block';
}
};

function MoreInfoFunction6() {
  if (textHolder6.style.display === 'block') {
    moreInfoButton6.innerHTML = 'More Info...';
    textHolder6.style.display = 'none';
} 
   else { 
   //(textHolder.style.display === 'block')  
    moreInfoButton6.innerHTML = 'Close';
    textHolder6.style.display = 'block';
}
};



//Adam solution 
// (function showText(){
//   let buttons = document.querySelector('.projects-container').querySelector('.btn-project');
//     for (i = 0; i < buttons.length; i++) {
//       buttons[i].addEventListener('click', (e) => {
//         e.target.nextElementSibling.classList.toggle('text-holder');
//       });
//     };
// });


// moreInfoButton.onclick = function() {MoreInfoFunction()};

// function MoreInfoFunction() {
//   if (textHolder.style.display === 'none') {
//     moreInfoButton.innerHTML = 'Close';
//     textHolder.style.display = 'block';
// }
//   else if (textHolder.style.display === 'block'){
//     moreInfoButton.innerHTML = 'More Info...';
//     textHolder.style.display = 'none';
// }
//   else {
//     moreInfoButton.style.backgroundColor = 'red';
//   }
// };


// textHolder.addEventListener('load', setDisplay);
//   function setDisplay(){
// textHolder.style.display = 'none';
// };



// $(".more-info-btn").on("click",function(){
//   $(".text-holder").css("display","block");
//   $(".more-info-btn").text("Close").toggleClass('more-info-btn more-info-close');

// });

// $(".more-info-close").on("click",function(){
//    $(".text-holder").css("display","none");
//    $(".more-info-close").text("More Info...").toggleClass('more-info-close more-info-btn');
//   });

  






