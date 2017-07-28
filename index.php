<?php get_header(); ?>
<main>
    <div class="post_board">
    <?php
    if(have_posts()):
        while (have_posts()) : the_post(); ?>
            
                <div class="post_container">
                    <div class="post_title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="post_teaser">
                        <span class="post_date"><?php echo get_the_date(); ?></span>
                        <?php the_excerpt(); ?>
                        <a href="<?php echo get_permalink(); ?>" class="post_link"> Post Continues...</a>
                    </div>
                </div>
            
    <?php   endwhile;

            else :
                echo '<p>No posts available.</p>';

                endif;
?>
    </div>
</main>
<?php get_footer(); ?>