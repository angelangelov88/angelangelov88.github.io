<!-- Database connection file -->
<?php 
  require __DIR__ . '/inc/connection.php';
  require __DIR__ . '/inc/functions.php';
?>

<!-- Add this variable here to make sure that the title reflect the page -->
<?php $title="Angel's Portfolio" ?>

<!-- HTML head -->
<?php include "./inc/head.php" ?>

<!-- Function to check if there is error text in the form and if there is one to scroll the page directly to the form -->
  <body onload="checkSpanContent()">

<!-- Navbar -->
<?php include "./inc/navbar.php" ?>
  
<!-- Beginning of the main content. I have added content div to wrap everything up-->
    <div class="content">

<!-- Hero image and text part -->
      <div class="hero-image" importance="high">
        <div class="gradient-div-brand"></div>

        <div class="hero-text">
          <!-- <h1>My Name is Angel Angelov</h1>
          <h2>I'm a Web Developer</h2> -->
          <div id="app"></div>
            <img src="images/share-imagae.jpg" style="display: none;" alt="share-image">
        </div>
<!-- Scroll down text and arrow -->
        <div class="scroll">
          <a href="#portfolio-link" class="scroll-down-arrow">Scroll Down
            <br>
          <i class="fas fa-chevron-down"></i>
          </a>
        </div>
      </div>

<!-- Project cards -->
<?php include "./inc/projects.php" ;
?>



<!-- Contact form -->
<?php include "./inc/contact.php" ?>


<!--Scroll up button  -->
      <div class="scroll-up">
        <a href="#" class="scroll-up-text">
        <i class="fas fa-chevron-up"></i>
        <br>
        Back To Top
        </a>
      </div>
    </div>  


<!-- Scripts -->

<?php include "./inc/scripts.php" ?>
<script src="js/index-page.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>


  </body>
</html>