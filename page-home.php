
<?php 
  
  get_header();

  if (have_posts() ) :
    while (have_posts() ) : the_post(); ?>

    <section class="bio">
      <h2 id="my_bio" class="section-header"><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </section>  
      <?php endwhile;

    else : 
      echo '<p>No content Found </p>';

    endif;

    get_footer();

?>
