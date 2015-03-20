    </div>

    <footer>

        <div class="footer">
                    <nav class="nav-footer">
              
              <?php $args = array(
                  'theme_location' => 'footer'
                  );

                  ?>

        <?php wp_nav_menu( $args ); ?>
          </nav>    
            <h5><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> - <a class="mute-link" href="#">psy-dev.nl</a></h5>

            <ul class="social__list social__list--footer"> 
                <li class="social__listitem social__listitem--footer">
                   <a target="_blank" href="https://www.facebook.com/johan.voorhout/"></a>
               </li>
               <li class="social__listitem social__listitem--footer">

                <a target="_blank" href="http://nl.linkedin.com/in/johanvoorhout/"></a>
                </li>
                <li class="social__listitem social__listitem--footer">
                    <a target="_blank" href="https://github.com/sheez44/"></a>
                </li>
                <li class="social__listitem social__listitem--footer">
                    <a href="mailto:contact@psy-dev.nl"></a>
               </li>
           </ul>    

       </div>


    </footer> 

  <?php wp_footer(); ?>
  </body>
</html>