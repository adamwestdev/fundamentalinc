<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700|Rubik:300,300i,700,700i&display=swap" rel="stylesheet">
        <link media="screen,  projection" href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="site--wrapper">
            <a class="skip-main" href="#content">Skip to main content</a>

            <header class="header<?php if ( is_user_logged_in() ) : echo ' logged-in-mobile-header-fix'; endif; ?>">
            
                <a href="<?php echo home_url(); ?>" title="" aria-label="" class="header--logo logo--white">
                    <?php include( 'inc/logo-svg.php' ); ?>
                </a>

                <nav class="header--nav">
                    <button class="header--nav-mobile-btn" id="mobile-nav-btn">
                        <i class="fas fa-bars" id="mnb-icon"></i>
                    </button>
                    <ul id="header-nav">
                        <li class="current-menu-item"><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Resouces</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <button class="header--nav-search-btn" id="main-search-btn">
                        <i class="fas fa-search" id="search-btn-icon"></i>
                    </button>
                </nav>

                <div class="header--search-form" id="main-search">
                    <form id="header-search-form">
                        <input type="text" name="s" placeholder="Search...">
                        <button name="submit" class="search-form-submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="close-search" id="close-main-search">Close Search</button>
                    </form>
                    
                </div>
            
            </header>


            <section class="hero--home-page">
                <div class="hero--nav-blocks">
                    <button id="ghg" class="service--btn">
                        Greenhouse Gas Services
                    </button>
                    <button id="cap" class="service--btn">
                        Climate Action Planning
                    </button>
                    <button id="eern" class="service--btn">
                        Energy Efficiecny &amp; Renewable Energy
                    </button>
                    <button id="eam" class="service--btn">
                        Eco Asset Management
                    </button>
                </div>
                <div class="hero--text-container">
                    <span class="service-text" id="service-text-ghg">
                        <h1>Greenhouse Gas Services</h1>
                        <p>Lorem ipsum dolar sit amet.</p>
                        <a href="#" title="" class="btn btn--med">Read More</a>
                    </span>
                    <span class="service-text" id="service-text-cap">
                        <h1>Climate Action Planning</h1>
                        <p>Lorem ipsum dolar sit amet.</p>
                        <a href="#" title="" class="btn btn--med">Read More</a>
                    </span>
                    <span class="service-text" id="service-text-eern">
                        <h1>Energy Efficiency &amp; Renewable Energy</h1>
                        <p>Lorem ipsum dolar sit amet.</p>
                        <a href="#" title="" class="btn btn--med">Read More</a>
                    </span>
                    <span class="service-text" id="service-text-eam">
                        <h1>Eco Asset Management</h1>
                        <p>Lorem ipsum dolar sit amet.</p>
                        <a href="#" title="" class="btn btn--med">Read More</a>
                    </span>
                </div>
                <video autoplay muted loop preload="metadata" class="bg-video">
                    <source src="<?php echo get_template_directory_uri(); ?>/images/test.mp4" type="video/mp4">
                    <!--<source src="movie.ogg" type="video/ogg">-->
                    Your browser does not support the video tag.
                </video>
                <div class="service-block-background" id="service-bg-ghg"></div>
                <div class="service-block-background" id="service-bg-cap"></div>
                <div class="service-block-background" id="service-bg-eern"></div>
                <div class="service-block-background" id="service-bg-eam"></div>
                <button class="esc-btn">esc</button>
            </section>

            <section class="hero--image">
                <div class="container">
                    <h1 class="hero--title"><?php echo get_the_title(); ?></h1>
                </div>
            </section>

            <section class="breadcrumbs">
                <div class="container">
                    <a href="<?php echo home_url(); ?>/projects" title="Projects" aria-label="Projects">Projects</a> / Climate Action Planning
                </div>
            </section>