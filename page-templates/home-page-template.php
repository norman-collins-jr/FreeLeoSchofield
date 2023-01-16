<?php /* Template Name: Home Page Template */ ?>

<?php get_header('home')?>

    <section id="story-section">
    <?php
        if (have_posts()):
            while (have_posts() ):the_post();?>
        <div id="story-pic">
            <?php the_post_thumbnail( 'full'); ?>
        </div>
        <div id="story-content">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
        
            <?php 
            endwhile;
        endif;
        ?>
    </section>
    <?php get_footer(); ?>