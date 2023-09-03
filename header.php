<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <!-- HTML Boilerplte v6.01 -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php wp_title( '-', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
  <!-- remove below link if google fonts are not used -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class( 'site-wrapper' ); ?>>

<header>

    <div class="sub-header">
        <ul>
            <li><i class="bi bi-telephone me-1"></i>
                0472-256256</li>
            <li><i class="bi bi-envelope ms-1"></i>
                mail@lpl.com</li>
        </ul>
    </div>

    <nav class="navbar navbar-expand-sm">
        <a class="" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/svg/kpl-logo.svg" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-wrap" id="collapsibleNavbar">
            <ul class="navbar-nav">

            <li class="nav-item <?php if (is_page('home')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url(); ?>">
                    HOME</a>
            </li>

            <li class="nav-item <?php if (is_page('about-us')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url().'/about-us'; ?>">
                    ABOUT US</a>
            </li>

            <li class="nav-item <?php if (is_page('products')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url().'/products'; ?>">
                    PRODUCTS</a>
            </li>

            <li class="nav-item <?php if (is_page('contact-us')) echo 'active'; ?>">
                <a class="nav-link" href="<?php echo site_url().'/contact-us'; ?>">
                    CONTACT US</a>
            </li>


            </ul>
        </div>
    </nav>
</header>

<section class="site-content">
