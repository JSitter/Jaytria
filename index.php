<?php get_header(); ?>
<main>
    <?php
    if(have_posts()):
        while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
            <a href="<?php echo get_permalink(); ?>"> Post Continues...</a>
    <?php   endwhile;
            
            else :
                echo '<p>Nothing here</p>';

                endif;
    ?> 
</main>
<?php get_footer(); ?>