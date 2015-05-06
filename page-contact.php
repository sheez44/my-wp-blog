
<?php 
  
  get_header();

  if (have_posts() ) :
    while (have_posts() ) : the_post(); ?>

    
      <h2 class="section-header" id="my_bio">Contact</h2>
      <p><?php the_content(); ?></p>
  
      <?php    

      endwhile;

    else : 
      echo '<p>No content Found </p>';

    endif;


    get_footer();

?>
