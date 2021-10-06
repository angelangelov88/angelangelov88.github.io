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

