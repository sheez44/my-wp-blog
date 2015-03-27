
<?php 
  
  get_header();
  ?>

  <div class="main-column">
    <?php
  if (have_posts() ) :
    while (have_posts() ) : the_post();

    get_template_part('content', get_post_format() );

      endwhile;

    else : 
      echo '<p>No content Found </p>';

    endif;
    ?>
  </div>

  <?php get_sidebar(); ?>

  <?php
    get_footer();

?>
