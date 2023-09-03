</section> <!-- #site-content -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/png/ft-logo.png" alt="">
                </div>
                <div class="col-lg-9  d-flex align-items-center justify-content-end">
                    <ul class="ft-links">
                        <li class="active">
                            <a  href="<?php echo site_url(); ?>">
                                HOME</a>
                        </li>

                        <li >
                            <a  href="<?php echo site_url().'/about-us'; ?>">
                                ABOUT US</a>
                        </li>

                        <li >
                            <a  href="<?php echo site_url().'/products'; ?>">
                                PRODUCTS</a>
                        </li>

                        <li >
                            <a  href="<?php echo site_url().'/contact-us'; ?>">
                                CONTACT US</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>