
<?php

get_header();

?>

    <div class="hero">

        <img src="<?php echo get_template_directory_uri(). '/assets/images/hero-image.png'?>" class="hero__image hero__image--pages" alt="">

        <h1 class="pages__title">Latest releases</h1>

    </div>


    <div class="main">

        <div class="releases__container">

            <button id="myBtn1" class="releases__tile releases__tile--release1"></button>

            <!-- The Modal -->
            <div id="myModal1" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="modal-body">
                        <img src="<?php echo get_template_directory_uri(). '/assets/images/release1.png'?>" class="modal__image" alt="album cover">

                        <h2 class="modal__song-title"> Devil</h2>
                        <p class="modal__song-artist"> Benny L</p>
                        <p class="modal__song-platforms"> Available on</p>

                        <div class="modal__logo-container">
                            <a href="https://www.deezer.com/en/"><img src="<?php echo get_template_directory_uri(). '/assets/images/deezer-logo.png'?>" class="modal__logo" alt="deezer music"></a>
                            <a href="https://www.apple.com/uk/music/"><img src="<?php echo get_template_directory_uri(). '/assets/images/google-logo.png'?>" class="modal__logo" alt=" google music "></a>
                            <a href="https://www.spotify.com/uk/"><img src="<?php echo get_template_directory_uri(). '/assets/images/soundcloud-logo.png'?>" class="modal__logo" alt="spotify"></a>
                        </div>
                    </div>
                </div>

            </div>
            <button id="myBtn2" class="releases__tile releases__tile--release2"></button>

            <!-- The Modal -->
            <div id="myModal2" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="modal-body">
                        <img src="<?php echo get_template_directory_uri(). '/assets/images/release2.png'?>" class="modal__image" alt="album cover">

                        <h2 class="modal__song-title"> Horizon</h2>
                        <p class="modal__song-artist"> Benny L</p>
                        <p class="modal__song-platforms"> Available on</p>

                        <div class="modal__logo-container">
                            <a href="https://www.deezer.com/en/"><img src="<?php echo get_template_directory_uri(). '/assets/images/deezer-logo.png'?>" class="modal__logo" alt="deezer music"></a>
                            <a href="https://www.apple.com/uk/music/"><img src="<?php echo get_template_directory_uri(). '/assets/images/google-logo.png'?>" class="modal__logo" alt=" google music "></a>
                            <a href="https://www.spotify.com/uk/"><img src="<?php echo get_template_directory_uri(). '/assets/images/soundcloud-logo.png'?>" class="modal__logo" alt="spotify"></a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <script src="/assets/js/script.js"></script>


<?php get_footer(); ?>
