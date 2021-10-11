//Side navbar
//I added variables for all the elements in order to make the code readable
const navbar = document.getElementsByClassName("navbar")[0];
const hamburger = document.getElementsByClassName('hamburger')[0];
const body = document.body;
const gradient = document.getElementsByClassName('gradient-div-brand')[0];
const fontColor = document.getElementById('app');
const scrollDisappear = document.getElementsByClassName('scroll')[0];
const blocker = document.getElementsByClassName('blocker')[0];


//This is the function that is triggered on click on burger menu button. It basically shows the sidebar, changes the colour of the background, the color of the hero text, stops the scrolling option for the page and shows the blocker div on top. This last thing allows the user to close the sidebar by clicking anywhere but on it.
function openNav() {
    navbar.style.display = 'block';
    // gradient.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
    fontColor.style.color = '#ffffff9e';
    scrollDisappear.style.position = 'initial';
    blocker.style.zIndex = 100;
    blocker.style.display = 'block';
    blocker.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
    body.style.overflow = 'hidden';
    hamburger.style.display = 'none';

}

//The second function was needed because console gives errors as some of the properties in the first one are not available on other pages. This way on click it opens the sidenav for all pages but index.html
function openNav2() {
  navbar.style.display = 'block';
  blocker.style.zIndex = 100;
  // blocker.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';
  blocker.style.display = 'block';
  body.style.overflow = 'hidden';
  hamburger.style.display = 'none';

}


//This is the function that closes the sidebar on clicking anywhere on the page but the sidebar
function closeNav() {
    navbar.style.display = 'none';
    navbar.style.backgroundColor = 'none';
    // gradient.style.backgroundColor = 'initial';
    fontColor.style.color = 'white';
    scrollDisappear.style.position = 'block';
    blocker.style.zIndex = 0;
    blocker.style.display = 'none';
    body.style.overflow = 'auto';
    hamburger.style.left = '0px';
    hamburger.style.display = 'block';

  }

//Again second function for all the pages but index.html
  function closeNav2() {
    navbar.style.display = 'none';
    navbar.style.backgroundColor = 'none';
    // gradient.style.backgroundColor = 'initial';
    // fontColor.style.color = 'white';
    // scrollDisappear.style.position = 'block';
    blocker.style.zIndex = 0;
    // blocker.style.backgroundColor = 'initial';
    blocker.style.display = 'none';
    body.style.overflow = 'auto';
    hamburger.style.left = '0px';
    hamburger.style.display = 'block';
  }


//Second function for all the pages but index.html. It does absolutely the same as the next one but ignores some of the elements that do not exist on those pages
function showNavbar2(y) {
  if (y.matches) { // If media query matches
    navbar.style.display = 'block';
    blocker.style.display = 'none';
    body.style.overflow = 'auto';
    hamburger.style.left = '0px';
    blocker.style.backgroundColor = 'initial';
  }  else {
    navbar.style.display = 'none';
    hamburger.style.display = 'block';

  }
}

var y = window.matchMedia("(min-width: 768px)")
showNavbar2(y) // Call listener function at run time
y.addListener(showNavbar2) // Attach listener function on state changes


  //This has been added in order to make sure that the sidebar for small screens disappears if the user changes their viewport. Now they can change between small and big screen and there should be no issues. 
  function showNavbar(x) {
    if (x.matches) { // If media query matches
      navbar.style.display = 'block';
      blocker.style.zIndex = 0;
      gradient.style.backgroundColor = 'initial';
      fontColor.style.color = 'white';
      scrollDisappear.style.position = 'block';
      blocker.style.zIndex = 0;
      body.style.overflow = 'auto';
      hamburger.style.display = 'none';
    }  else {
      navbar.style.display = 'none';
      hamburger.style.display = 'block';
    }
  }
  
  var x = window.matchMedia("(min-width: 768px)")
  showNavbar(x) // Call listener function at run time
  x.addListener(showNavbar) // Attach listener function on state changes
  