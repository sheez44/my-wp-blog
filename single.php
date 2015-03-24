
<?php 
  
  get_header();

  if (have_posts() ) :
    while (have_posts() ) : the_post(); ?>

    <article class="post">
      <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h5 class="post__subtitle">This article was posted on <?php the_time('d F, Y') ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> |  

      <?php 

      $categories = get_the_category();
      $seperator = ", ";
      $output = '';

      if($categories) {
        foreach($categories as $category) {
          $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $seperator ;
        }

        echo trim($output, $seperator);
      }

      ?>

      </h5>
      <?php the_post_thumbnail('banner-image'); ?>
      
      <p><?php the_content(); ?></p>
    </article>  
      <?php endwhile;

    else : 
      echo '<p>No content Found </p>';

    endif;

    get_footer();

?>