<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo( 'name' )?></title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <?php wp_head(); ?>
    </head>
<body>
    <?php wp_body_open(); ?>
    <div id="home-title-and-main-nav">
        <div id="home-title">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_file_uri('img/free_logo.png');?>" /></a>
        </div>
        <?php wp_nav_menu( $args = array(
            'menu'=> 'primary',
            'container_id'=>'home-main-nav'
        ));?>
    </div>
    <div id="home-hero-container">
        <h2>Leo Schofield: What will it take to free an innocent man?</h2>
        <p>Think this is the plot for a movie?<br>Leo and his family wish it was.<br>
            Please click the button below and read the outragious story:
        </p>
        <a id="hero-button" class="btn btn-light-outline" href="#story-section">Read the Story</a>
    </div>