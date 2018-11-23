<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>

    <div class="container">
        <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
            <div class="post">
                <h1><?php the_title(); ?></h1>

                <ul class="desc">
                    <li class="categories"><?php the_category(', '); ?> | </li>
                    <li class="author">Posted by: <?php the_author_posts_link(); ?> | </li>
                    <li class="time">Posted on: <?php the_time('j F Y'); ?></li>
                </ul>

                <div><?php the_excerpt(); ?></div>

                <div class="blog_post_image">
                    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?> </a>
                </div>

                <a href="<?php the_permalink(); ?>"> Continue reading</a>

            </div>
            <hr />
            <?php endwhile; ?>
        <?php endif; ?>

        <?php
        if ( function_exists('dynamic_sidebar') )
            dynamic_sidebar('right-sidebar');
        ?>

        <?php mytheme_pagination(); ?>
        <div class="pagination justify-content-center" style="margin:20px 0">
            <ul class="pagination pagination-lg">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div>
    </div>

<?php get_footer(); ?>