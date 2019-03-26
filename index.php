<?php

get_header();


?>

<div class="hero">

    <img src="<?php echo get_template_directory_uri(). '/assets/images/hero-image.png'?>" class="hero__image .hero-pages__image" alt="">

    <img src="<?php echo get_template_directory_uri(). '/assets/images/hero.png'?>" class="hero__text" alt="Benny L logo">

</div>




<div class="main">


    <div class="profile__container">

        <h2 class="profile__title">Profile</h2>
        <p class="profile__text">Growing up, music was the centre point of Benny L’s life. After learning a range of instruments, from drums, the piano, trumpet and even the violin, he dedicated some of his most formative years to perfecting his craft. Although this could only
            be expected, after all he grew up alongside family members who also took just as much time pouring over their own musicality.
        </p>
        <div class="profile__link-container">
            <div class="profile__link profile__link--soundcloud hvr-grow"></div>
            <div class="profile__link profile__link--skiddle hvr-grow"></div>
            <div class="profile__link profile__link--label hvr-grow"></div>
            <div class="profile__link profile__link--facebook hvr-grow"></div>
        </div>
    </div>

    <img class="profile__image" src="<?php echo get_template_directory_uri(). '/assets/images/benny.png'?>" alt="Benny L portrait ">

   <h2 class="event__section-title">Upcoming events</h2>
    
    

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 

    <div class="event__container">

        <img src="<?php the_post_thumbnail_url(); ?>" class="event__image" alt="event lineup poster">

        <div class="event__content">
            <h2 class="event__title">
                <?php the_title(); ?>
            </h2>
            <p class="event__text">
                <?php the_content(); ?>
            </p>

            <div class="event__logo-container">
                <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'ticket_link', true ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(). '/assets/images/ticket-black.png'?>" class="event__logo hvr-grow" alt="ticket link"></a>
                <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'facebook_link', true ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(). '/assets/images/facebook-black.png'?>" class="event__logo hvr-grow" alt="facebook event link"></a>

            </div>
        </div>
    </div>

    <?php endwhile; endif; ?>




</div>



<?php get_footer(); ?>
