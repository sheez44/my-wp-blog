
<?php 
  
  get_header();

  ?>
  
   <section class="bio">
            <h2 class="section-header" id="my_bio">My Bio</h2>
            
            <div class="bio__lockup">
                <h3 class="bio__title">Background</h3>
                <ul>
                    <li>I live in the Netherlands, near Eindhoven.
                    </li>
                    <li>In july 2013 I graduated from <span class="bio--highlight">Tilburg University</span>. I earned a bachelor's degree in <span class="bio--highlight">Psychology</span> and a master's degree in <span class="bio--highlight">Economic Psychology</span>.</li>  
                    <li>I have learned a lot about (scientific-)research, social psychology, marketing, and consumer behavior. After my graduation, however, I found it quite hard to find a suitable job, 
                        due to a variety of reasons.</li>
                    </ul>

                    <h3 class="bio__title">How I became a developer</h3>
                    <ul>
                        <li>Still looking for a job at the start of may 2014, I stumbled upon the website codecademy. I learned the basics of html and css, leaving me with a great desire to learn more. </li>
                        <li>As I learned more, <span class="bio--highlight">my passion</span> for web development grew, and I ultimately decided that this is what I wanted to do professionally.  </li>
                        <li>Ever since, I have been trying to study at least 3 hours a day, which is still true to this day.</li>
                    </ul>

                    <h3 class="bio__title">Current goals</h3>
                    <ul>
                        <li>My current goals are to improve my skills with Sass, Bootstrap, Git and javascript. I would also like to learn a bit more about php and mySQL so that I will be able to get information in and out of a database.</li> 
                        <li>I want to learn one or more javascript MV*/MVC frameworks in 2015 (starting with <span class="bio--highlight">Backbone.js</span>).</li>

                    </ul>

            </div>

            <img src="<?php bloginfo('template_url');?>/images/my_graduation.png" alt="">

        </section>      


  <?php

    get_footer();

?>
