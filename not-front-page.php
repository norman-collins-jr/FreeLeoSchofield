<?php 
wp_reset_postdata();

$story_query=new WP_Query('p=6');
?>
<?php get_header('home')?>

    <section id="story-section">
    <?php
        if ($story_query->have_posts()):
            while ($story_query->have_posts() ): $story_query->the_post();?>
        <div id="story-pic">
            <?php the_post_thumbnail( 'full'); ?>
        </div>
        <div id="story-content">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
        
            <?php 
            endwhile;
        endif;
        ?>
    </section>
    <?php get_footer(); ?>