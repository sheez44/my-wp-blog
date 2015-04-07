
<?php 
  
  get_header();

  if (have_posts() ) :
    while (have_posts() ) : the_post(); ?>

    <article class="post page">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </article>  
      <?php 
      if ( comments_open() || get_comments_number() ) :
        comments_template();

      endif;

      endwhile;

    else : 
      echo '<p>No content Found </p>';

    endif;

    get_footer();

?>
