<?php get_header(); ?>

<div class="container">
    <?php if( have_posts() ){ while( have_posts() ){ the_post(); ?>

        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h1><?php the_title(); ?></h1>

            <div class="blog_post_image">
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'large' ); ?> </a>
            </div>

            <?php the_content(); ?>
        </div>

    <?php } /* конец while */ ?>

        <?php
    }
    else
        echo "<h2>Этой записи нет</h2>"; ?>
</div>

<?php get_footer(); ?>
