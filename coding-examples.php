<!-- HTML head -->
<?php include "./inc/head.php" ?>

  <body>
<!-- Navbar -->
<?php include "./inc/navbar2.php" ?>



<div class="coding-examples-container">
      <div class="coding-examples-hero">
<!-- Added gradient div to make the background darker and text be easily readable -->
        <div class="gradient-div"></div>
        <h1>Coding Examples</h1>
      </div>

<!-- CODING EXAMPLES -->
      <div id="coding-link" class="coding-examples-content-container">
        

<!-- Coding example 1 -->
        <div class="coding-example-1 coding-example">
          <h4 class="coding-title">jQuery plugin for typing effect for the brand text</h4>
          <p class="coding-text coding-text-1">I used this code to implement a typing effect to the brand text on my portfolio website. I decided to go with a jQuery plugin which worked perfectly. It is a little line of code that does the job. There are many options in the plugin which can customise it as required. It is easy to use and user friendly plugin and most importantly works in Internet Explorer.
          </p>
          <pre class="coding-snippet-1 coding-snippet"> 
  var app = document.getElementById('app');
  var typewriter = new Typewriter(app, {
    loop: false,
    cursor: "",
    delay: 90
  });

  typewriter.typeString
  ("&lth1>My Name is Angel Angelov&lt/h1>")
  .pauseFor(50).typeString
  ('&lth2 class="strapline">I\'m a Web 
  Developer').start();
          </pre>              
        </div>


<!-- Coding example 2 -->
        <div class="coding-example-2 coding-example">
          <h4 class="coding-title">JavaScript function to show/hide button in the projects page</h4>
          <p class="coding-text coding-text-2">That was my first function in JavaScript. I created it in order to make the button in my projects page change and show additional information about my projects. It basically toggles in order to show or hide the additional information. 
          </p>
          <pre class="coding-snippet-2 coding-snippet">
  function MoreInfoFunction1() {
    if (textHolder1.style.display === 'block') {
      moreInfoButton1.innerHTML = 'More Info...';
      textHolder1.style.display = 'none';
  } 
    else { 
      moreInfoButton1.innerHTML = 'Close';
      textHolder1.style.display = 'block';
  }
  };
            </pre>
          </div>


<!-- Coding example 3 -->
        <div class="coding-example-3 coding-example">
          <h4 class="coding-title">Coding Example 3</h4>
          <p class="coding-text coding-text-3"> The objective is to extract information about employees based on certain criteria. I added a query to the SQL Employee database to list all employees with their names, role, hire date and salary as long as the salary is higher than the salary of one particular employeee - 'ADELYN'. I used subquery to make SQL compare the salaries and show only the employees with a higher salary than this value. After that I added an additional condition to the query which is to show only employees hired between 1991-06-01 and 1998-01-01. At the end I have sorted the output in ascending order (default) based on the salary.
          <br>
          <br>
            The outcome shows all employees meeting the criteria. I have tried without the hire_date condition and the query returns 6 employees. After adding the hire_date condition it returns only 4.
          </p>
            <table class="example-3-table">
              <tr>
                <th>Employee</th>
                <th>Role</th>
                <th>Hire Date</th>
                <th>Salary</th>
              </tr>
              <tr>
                <td>CLARE</td>
                <td>MANAGER</td>
                <td>1991-06-09</td>
                <td>2550.00</td>
              </tr>
              <tr>
                <td>SCARLET</td>
                <td>ANALYST</td>
                <td>1997-04-19	</td>
                <td>3100.00</td>
              </tr>
              <tr>
                <td>FRANK</td>
                <td>ANALYST</td>
                <td>1991-12-03</td>
                <td>3100.00</td>
              </tr>
              <tr>
                <td>KAYLING</td>
                <td>PRESIDENT</td>
                <td>1991-11-18	</td>
                <td>6000.00</td>
              </tr>
            </table>
          <pre class="coding-snippet-3 coding-snippet">  SELECT emp_name AS Employee, job_name AS Role, 
         hire_date, salary
  FROM employees
  WHERE salary > 
    (SELECT salary
      FROM employees
      WHERE emp_name = 'ADELYN')
  AND hire_date 
  BETWEEN '1991-06-01' AND '1998-01-01'
  ORDER BY salary
  ;          
          </pre>
        </div>


<!-- Coding example 4 -->
        <div class="coding-example-4 coding-example">
          <h4 class="coding-title">Coding Example 4</h4>
          <p class="coding-text coding-text-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <pre class="coding-snippet-4 coding-snippet">


Example code



          </pre>     
        </div>


<!-- Coding example 5 -->
        <div class="coding-example-5 coding-example">
          <h4 class="coding-title">Coding Example 5</h4>
          <p class="coding-text coding-text-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <pre class="coding-snippet-5 coding-snippet">


Example code



          </pre>            
        </div>


<!-- Coding example 6 -->
        <div class="coding-example-6 coding-example">
          <h4 class="coding-title">Coding Example 6</h4>
          <p class="coding-text coding-text-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <pre class="coding-snippet-6 coding-snippet">


Example code



          </pre>            
        </div>
      </div>
    </div>

  
<!--Scroll up button  -->
    <div class="scroll-up-examples">
      <a href="#" class="scroll-up-text">
      <i class="fas fa-chevron-up"></i>
      <br>
      Back To Top
      </a>
    </div>

    
<!-- Scripts -->
<?php include "./inc/scripts.php" ?>


  </body>
  </html>