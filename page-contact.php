
<?php 
  
  get_header();

  ?>
  
  <section class="contact">
    <h2 class="section-header" id="my_bio">My Bio</h2>
    <div class="input__text--intro">

    <h2>If you wish to contact me, use the form below.</h2>

    </div>
    <form id="form" action="index.php#form" method="POST" novalidate="novalidate">
      <div class="input__group"><label for="name">Name
      <input id="name" name="name" type="text" /></label>
      <label for="_replyto">Email
      <input id="_replyto" name="_replyto" type="email" /></label></div>
      <label for="textarea">Tell me about your project</label>
      <textarea id="textarea" name="textarea"></textarea>

      <input type="submit" value="Send" />

    </form>
  </section>



  <?php

    get_footer();

?>
