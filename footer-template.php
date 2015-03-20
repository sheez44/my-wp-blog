
<?php 
  
  /*
  Template Name: Special Footer Layout
  */


  get_header();

  if (have_posts() ) :
    while (have_posts() ) : the_post(); ?>

    <article class="post page">
      <h2><?php the_title(); ?></h2>

      <div class="info-box">
        <h4>disclaimer title</h4>
        <p>special comments</p>
      </div>

      <p><?php the_content(); ?></p>
    </article>  
      <?php endwhile;

    else : 
      echo '<p>No content Found </p>';

    endif;

    get_footer();

?>
