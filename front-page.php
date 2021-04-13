<?php
get_header()
?>

<main id="main" class="proximity-container snap-scroll">
    <section id="section0" class="snap-align section background section1-background dark-bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/viaduct.jpeg);">
        <div class="center">
            <span class="home-text">FOLLOW THE<br> FOOTSTEPS OF HISTORY</span>
        </div>
    </section>


    <section class="snap-align section fullscreen relative" id="section1">
        <div class="center">
            <span id="quote" class="quote">"No one can be happy in eternal solitude."<br> -Anne Brontë, The Tenant of
                Windfell Hall</span>
        </div>
    </section>

    <section class="snap-align section fullscreen relative d-flex flex-row section4" id="section4">
        <div class="walk-img-div d-flex justify-content-center order-sm-1 order-md-1 order-lg-1 order-xl-2 col-xl-6 col-lg-6">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/walk.jpg" class="walk-picture">
        </div>
        <div class="d-flex flex-column justify-content-center order-sm-2 order-md-2 order-lg-2 order-xl-1 col-xl-6 col-lg-6">
            <div class="d-flex flex-column justify-content-center walk-text-div plan-left">
                <span class="plan-title section-title align-self-center">WALK</span>
                <span class="walk-text">Step closer to the life of the Brontë sisters, discover the emotions of the stones and
                    experience the beauty of Yorkshire</span>
                <div class="walk-btn-div align-self-center">
                    <a href="<?php bloginfo('url') ?>/the-walks" class="home-button-grey plan-button">the walks</a>
                </div>
            </div>
        </div>
    </section>


    <section class="snap-align section fullscreen relative d-flex flex-row section3" id="section3">
        <div class="learn-img-div d-flex justify-content-center col-xl-6 col-lg-6">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/learn.jpg" class="learn-picture align-self-center">
        </div>
        <div class="learn-text-div learn-margin d-flex flex-column justify-content-center col-xl-6 col-lg-6">
            <span id="learn-title" class="learn-title align-self-center section-title">LEARN</span>
            <span id="learn-text" class="learn-text align-self-center text-center mb-3">Learn about the project and the
                history surrounding the Stones</span>
            <div class="learn-btn-div align-self-center">
                <a href="<?php bloginfo('url') ?>/about-the-stones" class="home-button-grey ">about the stones</a>
            </div>
        </div>
    </section>


    <section class="snap-align section fullscreen relative d-flex flex-row section4" id="section4">
        <div class="plan-img-div d-flex justify-content-center order-sm-2 order-md-1 order-lg-1 order-xl-2 col-xl-6 col-lg-6">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/plan.png" class="plan-picture align-self-center">
        </div>
        <div class="d-flex flex-column justify-content-center order-sm-1 order-md-2 order-lg-2 order-xl-1 col-xl-6 col-lg-6">
            <span class="plan-title section-title align-self-center">PLAN</span>
            <span class="plan-text mt-4">Plan your visit to experience the stones for
                yourself.</span>
            <div class="plan-btn-div mt-4 align-self-center">
                <a href="<?php bloginfo('url') ?>/plan-your-visit" class="home-button-grey plan-button">plan your visit</a>
            </div>
        </div>
    </section>

    <section class="snap-align section fullscreen relative d-flex flex-row section3">
        <div class="learn-img-div d-flex justify-content-center col-xl-6 col-lg-6">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/whats-on.jpg" class="learn-picture align-self-center">
        </div>
        <div class="learn-text-div learn-margin d-flex flex-column justify-content-center col-xl-6 col-lg-6">
            <span id="learn-title" class="whats-on-title align-self-center section-title text-center">WHAT'S ON</span>
            <span id="learn-text" class="learn-text align-self-center text-center mb-3">Our events, guided walks and more!</span>
            <div class="learn-btn-div align-self-center">
                <a href="<?php bloginfo('url') ?>/whats-on" class="home-button-grey ">What's on</a>
            </div>
        </div>
    </section>

    <section class="snap-align section fullscreen background d-flex flex-column justify-content-center" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/shop.jpg);" id="section5">
        <div class="shop-title-div align-self-center">
            <span class="shop-title section-title ">SHOP</span>
        </div>
        <span class="shop-text align-self-center">Browse our range of clothing,<br> custom maps and more.</span>
        <div class="shop-btn-div align-self-center">
            <a href="<?php bloginfo('url') ?>/shop" class="shop-button home-button">shop</a>
        </div>
    </section>

    <section class="snap-align section fullscreen relative d-flex flex-row section3 connect-padding">
        <div class="learn-img-div d-flex justify-content-center col-xl-6 col-lg-6">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/contact.jpg" class="learn-picture align-self-center">
        </div>
        <div class="learn-text-div learn-margin d-flex flex-column justify-content-center col-xl-6 col-lg-6">
            <span id="learn-title" class="connect-title align-self-center section-title">CONNECT</span>
            <span id="learn-text" class="learn-text align-self-center text-center mb-3">Connect with us, share your thoughts or book a tour of the stones</span>
            <div class="learn-btn-div align-self-center">
                <a href="<?php bloginfo('url') ?>/contact" class="home-button-grey ">Contact us</a>
            </div>
        </div>
    </section>
    <div class="footer-home d-flex row justify-content-between m-0">
        <div class="text-center col-sm-12 col-md-12 col-lg-5 col-xl-5 order-xs-1 order-sm-1 order-md-1 order-lg-2 order-xl-2 footer-nav p-0">
            <a class="footer-nav-link pr-2 footer-link-text" href="#section0">home</a>
            <a class="footer-nav-link pr-2 footer-link-text" href="<?php bloginfo('url') ?>/plan-your-visit">plan your visit</a>
            <a class="footer-nav-link pr-2 footer-link-text" href="<?php bloginfo('url') ?>/the-walks">the walks</a>
            <a class="footer-nav-link pr-2 footer-link-text" href="<?php bloginfo('url') ?>/about-the-stones">about the stones</a>
            <a class="footer-nav-link footer-link-text" href="<?php bloginfo('url') ?>/shop">shop</a>
        </div>
        <div class="d-flex justify-content-center col-sm-12 col-md-12 col-lg-4 col-xl-4 order-xs-2 order-sm-2 order-md-2 order-lg-3 order-xl-3 footer-link-div">
            <div class="ml-lg-auto ml-xl-auto footer-links pr-2">
                <a href="https://www.facebook.com/brontestones">
                    <i class="fab fa-facebook-f"></i>
                    <div class="footer-link-text">Facebook</div>
                </a>
            </div>
            <div class="footer-links pr-2">
                <a href="https://www.instagram.com/thebrontestones">
                    <i class="fab fa-instagram"></i>
                    <div class="footer-link-text">Instagram</div>
                </a>
            </div>
            <div class="footer-links pr-2">
                <a href="https://twitter.com/brontestones">
                    <i class="fab fa-twitter"></i>
                    <div class="footer-link-text">Twitter</div>
                </a>
            </div>
        </div>
        <div class="text-center col-sm-12 col-md-12 col-lg-3 col-xl-3 order-xs-3 order-sm-3 order-md-3 order-lg-1 order-xl-1 pl-1 copyright p-0">
            <div class="copyright-text footer-link-text">© Michael Stewart 2021</div>
        </div>
    </div>


</main>

<?php
wp_footer();
?>
</div>


</body>

</html>