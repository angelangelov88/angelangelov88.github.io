<!-- Add this variable here to make sure that the title reflect the page -->
<?php $title="About Me" ?>

<!-- HTML head -->
<?php include "./inc/head.php" ?>
  <body>
<!-- Navbar -->
<?php include "./inc/navbar2.php" ?>

<div class="about-me-image-container">
	<div class="gradient-div-about-me"></div>
	<h1>About Me</h1>
</div>
<div id="about-me-text-container">
	<div class="about-me-text">
		<p>My name is Angel and I am a Cambridge based web developer. I started my web development journey in February 2021 after a Covid related redundancy and have completed a few projects since. I have worked with HTML and CSS (SASS), JavaScript, jQuery, SQL and PHP. My first project was to clone the <a href="http://reflection.angel-angelov.netmatters-scs.co.uk/" class="about-me-links" target="_blank">Netmatters' website</a>. I have done that at stages using the skills I've just learnt. First I started with the HTML and CSS. I made sure the website is responsive and I used mobile first approach. Once I learnt Vanilla JavaScript, I added some features such as sticky header, hamburger menu, hero image slider, etc. At the end I added the PHP part which was to create a new Contact page with a contact form. I used PHP and SQL to get the user input and add it to a database. I also made all my pages PHP instead of HTML in order to re-use some elements such as header, footer and navbar. I used PHP to fetch data from the database and add the newscards on the page.
		</p>       
		<p>After that I have worked on projects using JavaScript, React, Vue, PHP and WordPress. All my projects can be seen on</p>  
		<a href="index.php#portfolio-link" class="about-me-links">
			<h4 class="about-me-text-h4">My Portfolio Page</h4>
		</a>
		<p>I have started my journey quite recently but have gained invaluable knowledge and experience in a short period of time. I am interested to continue learning and improving my skills. After obtaining a degree in International Tourism Management and working for more than 5 years in the travel and tourism industry, I got the opportunity to start something new. I started this course in order to turn my career to a new direction. I have always been quite interested in technology and have been fixing friends and family computers since I was a kid. 
			<p id="myCv">Download My CV
				<a href="images/CV - Angel Angelov.pdf" download><i class="fas fa-file-pdf fa-5x"></i></a>
			</p>
			<br>
			<br>
When I am not coding I will most probably be watching football or go for a walk in the nature with my dog. I also love traveling and exploring the World and new cultures and places. 
		</p>
		<div class="about-me-icons">
			<div class="icons-container">
				<div class="html-container">
					<div class="html-icon">
						<i class="fab fa-html5 logo-icon"></i>
					</div>
					<div class="icon-text">
						<h4>HTML</h4>
					</div>
				</div>
				<div class="css-container">
					<div class="css-icon">
						<i class="fab fa-css3-alt logo-icon"></i>
					</div>
					<div class="icon-text">
						<h4>CSS</h4>
					</div>
				</div>
				<div class="html-container">
					<div class="sass-icon">
						<i class="fab fa-sass logo-icon "></i>
					</div>
					<div class="icon-text">
						<h4>SASS</h4>
					</div>
				</div>

				<div class="js-container">
					<div class="js-icon">
						<i class="fab fa-js-square logo-icon"></i>
					</div>
					<div class="icon-text">
						<h4>JavaScript</h4>
					</div>
				</div>

				<div class="react-container">
					<div class="react-icon">
						<i class="fab fa-react logo-icon"></i>
					</div>
					<div class="icon-text">
						<h4>React</h4>
					</div>
					</div>

				<div class="react-container">
					<div class="react-icon">
						<i class="fab fa-vuejs logo-icon"></i>
					</div>
					<div class="icon-text">
						<h4>Vue</h4>
					</div>
				</div>

				<div class="react-container">
					<div class="react-icon">
						<i class="fab fa-brands fa-node logo-icon"></i>
					</div>
					<div class="icon-text">
						<h4>Node.js</h4>
					</div>
				</div>
				<div class="jquery-container">
					<div class="jquery-icon">
						<img src="./images/jquery.png" class="logo-icon" alt="jquery-logo">
					</div>
					<div class="icon-text">
						<h4>jQuery</h4>
					</div>
				</div>

				<div class="sql-container">
					<div class="sql-icon">
						<i class="fas fa-database logo-icon"></i>
					</div>
					<div class="icon-text">
						<h4>SQL</h4>
					</div>
				</div>

				<div class="php-container">
					<div class="php-icon">
						<i class="fab fa-php logo-icon"></i>
					</div>
					<div class="icon-text">
						<h4>PHP</h4>
					</div>
				</div>

				<div class="wordpress-container">
					<div class="wordpress-icon">
						<i class="fab fa-wordpress logo-icon"></i>
					</div>
					<div class="icon-text">
						<h4>Wordpress</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Scripts -->
<?php include "./inc/scripts.php" ?>




</body>
</html>