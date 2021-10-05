<!-- Container of the project cards -->
<div id="portfolio-link" class="projects-container">


        
          <?php 
            foreach (pullProjects($db) as $key => $projects) {
              
              // $date = new DateTime($projects['date']); 
              
              echo '<div class="project">';
              echo '<a href="' . $projects['link'] . '" target="_blank">';
              echo '<div class="img-container">';
              echo '<img src="' . $projects['image_link'] .'" class="photo-project" alt="project-photo">';
              echo '</div>';
              echo '<p class="project-title">'. $projects['title'] .'</p>';
              echo '</a>';
              echo '<a href="' . $projects['project_files_link'] .'" target="_blank" class="project-details">View Project Files';
              echo '<i class="fas fa-arrow-circle-right"></i>';
              echo '</a>';
              echo '<button class="btn-project more-info-btn-1">More Info...</button>';
              echo '<div class="text-holder">' . $projects['text'] .'</div>';
              echo '</div>';
            }
          ?>
</div>

<!-- Project 1 -->
        <!-- <div class="project-1 project">
          <a href="https://angelangelov88.github.io/" target="_blank">
            <div class="img-container">
              <img src="images/netmatters-reflection2.png" class="photo-reflection photo-project" alt="photo-reflection">
            </div>
            <p class="project-title project-title-1">Netmatters Reflection</p>   
          </a>         
          <a href="https://github.com/angelangelov88/angelangelov88.github.io" target="_blank" class="project-details" >View Project Files
            <i class="fas fa-arrow-circle-right"></i>
          </a>
          
          <button class="btn-project more-info-btn-1">More Info...</button>
          <div class="text-holder">My first project was to replicate the website of Netmatters. I started the project from scratch and had to add the HTML and CSS coding in order to make the website look identical to the actual one. I used my knowledge of HTML and CSS (including SASS) to implement the task. 
          </div>   
        </div> -->


<!-- Project 2 -->
        <!-- <div class="project-2 project">
          <a href="https://axure-project.angel-angelov.netmatters-scs.co.uk" target="_blank">
            <div class="img-container">
              <img src="images/axure-prototype2.png" class="photo-axure photo-project" alt="photo-axure">
            </div>
            <p class="project-title project-title-2">Axure Prototype</p>  
          </a>      
          <a href="https://github.com/angelangelov88/axure" target="_blank" class="project-details">View Project Files 
            <i class="fas fa-arrow-circle-right"></i>
          </a>
          <button class="btn-project more-info-btn-2">More Info...</button>
          <div class="text-holder">
          My second project was to create an online shopping website prototype with the functionality to order products from a product page. The requirements were to create a prototype with a basket page, sign-in and sign-up pages as well as option to add or remove items from the basket. The task is to be done with Axure. 
          </div>
        </div> -->

<!-- Project 3 -->
        <!-- <div class="project-3 project">
            <div class="img-container">
              <img src="images/portfolio.PNG" class="photo-portfolio photo-project" alt="photo-portfolio"></div>
            <p class="project-title project-title-3">Portfolio</p> 
                
          <a href="https://github.com/angelangelov88/portfolio" target="_blank" class="project-details">View Project Files
            <i class="fas fa-arrow-circle-right"></i>
          </a>
          <button class="btn-project more-info-btn-3">More Info...</button>
          <div class="text-holder">My third project was to create my Portfolio. The requrirement was to add a few pages to my website with information about myself, the program and my projects. I added a contact form which I later made interactive and a navbar for different screens. The navbar for big screens was implemented in the beginning with HTML and CSS only and the small screen navbar was added after I learnt JavaScript. I had to use my HTML, CSS and JavaScript skills to implement the task. I used my first JavaScript functions and jQuery in this project to make it interactive. I added jQuery plugin in the brand text to make it looks like it's been typed. I have also added code snippets to some of the code I've used in my projects.
          </div>
        </div> -->

<!-- Project 4 -->
        <!-- <div class="project-4 project">          
          <a href="https://reflection.angel-angelov.netmatters-scs.co.uk/" target="_blank">
            <div class="img-container">
              <img src="images/js-reflection.PNG" class="photo-reflection-js photo-project" alt="photo-change-name"></div>
            <p class="project-title project-title-3">JavaScript Reflection</p> 
          </a>       
          <a href="https://github.com/angelangelov88/Reflection-JavaScript" target="_blank" class="project-details">View Project Files
            <i class="fas fa-arrow-circle-right"></i>
          </a>
          <button class="btn-project more-info-btn-4">More Info...</button>
          <div class="text-holder">My task was to add JavaScript to the Netmatters website I've created earlier. The challenge was to add side navbar, sticky header, cookie pop-up and a slider for the hero images. I started with the header and added some JavaScript to make it stay on top. I added the same to the main navbar and added scroll down/up statement to make the page respond to user interaction. After that I added a jQuery plugin called owlCarousel to make my hero images change. I have also added some code to check if user has accepted the cookies and if not ask them to do so. The last and most important part of this task was to create a side navbar for different screen sizes that appears on click on the burger icon. 
          </div>
        </div> -->

<!-- Project 5 -->
        <!-- <div class="project-5 project">          
          <a href="http://js-image-assigner.angel-angelov.netmatters-scs.co.uk/"  target="_blank">
            <div class="img-container">
              <img src="images/image-assigner-task.PNG" class="photo-image-assigner photo-project" alt="photo-image-assigner"></div>
            <p class="project-title project-title-3">Image Assigner</p>  
          </a>      
          <a href="https://github.com/angelangelov88/JavaScript-Reflection-Task2" target="_blank" class="project-details">View Project Files 
            <i class="fas fa-arrow-circle-right"></i>
          </a>
          <button class="btn-project more-info-btn-5">More Info...</button>
          <div class="text-holder">That is my second JavaScript project. We had to create a page with randomly generated image shown. There should be option to refresh and show another one, add an email which is validated and assign an image to this email. Also there should be an option to add image to another email and show them all at the bottom of the page.
          </div>
        </div> -->

<!-- Project 6 -->
        <!-- <div class="project-6 project">          
          <a href="#"  target="_blank">
            <div class="img-container">
              <img src="images/code.jpg" class="photo-change-name photo-project" alt="photo-change-name"></div>
            <p class="project-title project-title-3">Project 6</p> 
          </a>       
          <a href="#" class="project-details">View Project Files 
            <i class="fas fa-arrow-circle-right"></i>
          </a>
          <button class="btn-project more-info-btn-6">More Info...</button>
          <div class="text-holder">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
        </div> -->


