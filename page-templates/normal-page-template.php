<?php /* Template Name: Normal Page Template */ ?>
<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<header id="other-page-header">
    <h2><?php the_title(); ?></h2>
</header>

<section id="other-main-content">

<?php the_content(); ?>



</section>


<?php endwhile; ?>



<?php else: ?>

<p>No posts found. :(</p>

<?php endif; ?>
<?php get_footer(); ?>
