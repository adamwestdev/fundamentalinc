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

            <header class="header">
            
                <a href="<?php echo home_url(); ?>" title="" aria-label="" class="header--logo logo--white">
                    <?php include( 'inc/logo-svg.php' ); ?>
                </a>

                <nav class="header--nav">
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Resouces</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="search"><button class="fas fa-search"></button></li>
                    </ul>
                </nav>
            
            </header>


            <section class="hero--image">
                <div class="container">
                    <h1 class="hero--title">Title</h1>
                </div>
            </section>

            <section class="breadcrumbs">
                <div class="container">
                    <a href="<?php echo home_url(); ?>/projects" title="Projects" aria-label="Projects">Projects</a> / Climate Action Planning
                </div>
            </section>