<?php get_header(); ?>
<main>
    <div class="post_board">

			<?php
                if(have_posts()): 
                    while(have_posts()) : the_post(); ?>
                        <h2><?php the_title(); ?></h2>
                        <span class="post_date"><?php the_date(); ?></span>
                        <div class="post_teaser"><?php the_content(); ?></div>
                
                <?php endwhile; endif; ?>
                        
			
    </div>
</main>
<?php get_footer(); ?>