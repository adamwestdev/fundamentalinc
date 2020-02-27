<?php get_header(); ?>

<main id="content" class="content" role="main" id="content" tabindex="-1">
    <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    </div>
</main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>