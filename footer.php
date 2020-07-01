<footer class="section section--footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h2>Address</h2>
                20 Rising Bridge Road<br>
                Haslingden<br>
                Rossendale<br>
                Lancashire<br>
                BB4 5BL
            </div>

            <div class="col-md-4">
                <h2>Contact</h2>
                <a class="link link--white" href="<?php echo get_permalink(get_page_by_path( 'tuition' )); ?>">Book a lesson</a><br><br>
                <a class="link link--white link--no-decoration" href="https://www.facebook.com/PlusLearningTuitionRossendale/" target="_top"><i class="fab fa-facebook-f"></i>&nbsp;&nbsp;Facebook</a><br>
                <a class="link link--white link--no-decoration" href="mailto:pluslearningtuition@gmail.com?Subject=Plus%20Learning%20Tuition%20Enquiry" target="_top"><i class="fas fa-envelope"></i>&nbsp;&nbsp;pluslearningtuition@gmail.com</a><br>
                <a href="tel:07833085613" class="link link--white link--no-decoration"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;07833 085613</a>
            </div>

            <div class="col-md-4">
                <a class="link link--white" href="https://www.11plusguide.com/" target="_blank" title="11 Plus Guide">
                    <img class="seal-logo" src="<?php echo get_template_directory_uri(); ?>/media/11plus-seal.png" alt="11 Plus Guide Seal"/>
                </a>
            </div>
        </div>

        <hr class="section--footer__hr">

        &copy; 2016-<?php echo date('Y') ?> Plus Learning Tuition
    </div>
</footer>

<?php wp_footer(); ?>

<script>
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease-out', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    });
</script>
</body>
</html>