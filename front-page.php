
<?php 
  
  get_header();
  ?>

  <?php if(have_posts()) :
    while (have_posts()) : the_post();

    the_content();

    endwhile;

    else :
      echo '<p>No content found</p>';

    endif; ?>
    <div class="home-columns">
      
      <div class="fp-posts fp-posts--blog">
      <h2 class="widget-title">Latest Blog posts</h2>
        <?php 
        // blog posts loop begins here
        $blogPosts = new WP_Query('cat=1&posts_per_page=2');

        if($blogPosts->have_posts()) :
          while ($blogPosts->have_posts()) : $blogPosts->the_post(); ?>

          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
          <p><?php the_excerpt(); ?></p>

          <?php
          endwhile;

          else :
            echo '<p>No content found</p>';

        endif;
        wp_reset_postdata();
        ?>
      </div>

      <div class="fp-posts fp-posts--tuts">
        <h2 class="widget-title">Latest tutorials</h2>
        <?php
        // blog posts loop begins here
        $tutPosts = new WP_Query('cat=4&posts_per_page=2');

        if($tutPosts->have_posts()) :
          while ($tutPosts->have_posts()) : $tutPosts->the_post(); ?>

          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
          <p><?php the_excerpt(); ?></p>

          <?php
          endwhile;

          else :
            echo '<p>No content found</p>';

        endif;
        wp_reset_postdata();

        ?>

      </div>
    </div>
    

  <?php
    get_footer();

?>
