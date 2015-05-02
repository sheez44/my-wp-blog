<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="wrapper">

    	<div class="header">              
    	               	                
            <div class="heading">

                <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/psy-dev-logo.png" class="header__photo" alt="Site logo"></a>

                <h1 class="heading__title"><a href="<?php echo home_url(); ?>">Johan Voorhout </a></h1>
                <h2 class="heading__title--subtitle">Webdeveloper, Psychologist, Learner</h2>
                <ul class="social__list social__list--header">
                    <li class="social__listitem social__Listitem--header"><a target="_blank" href="https://www.facebook.com/johan.voorhout/"></a></li>
                    <li class="social__listitem social__Listitem--header"><a target="_blank" href="http://nl.linkedin.com/in/johanvoorhout/"></a></li>
                    <li class="social__listitem social__Listitem--header"><a target="_blank" href="https://github.com/sheez44/"></a></li>
                    <li class="social__listitem social__Listitem--header"><a href="mailto:contact@psy-dev.nl"></a></li>
                </ul>
                
            </div>
                
            <div class="personal">
                
                <h3>Front-end Webdeveloper and Economic Psychologist. Passionate about Webdevelopment, Consumer Behavior, Marketing and Statistics.</h3>
                <img src="<?php bloginfo('template_url'); ?>/images/me.jpg" alt="my photo">
            </div>

            

        </div>

        <nav class="nav">
            
            <?php $args = array(
                'theme_location' => 'primary'
                );

                ?>

			<?php wp_nav_menu( $args ); ?>
        </nav>      

<!--         <div class="hd-search">
                <?php get_search_form(); ?>
        </div> -->