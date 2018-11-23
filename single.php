<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <h1><?php the_title(); ?></h1>

            <div class="article"> <?php the_content(); ?> </div>
        </div>
    <?php endwhile; ?>
<?php get_footer(); ?>