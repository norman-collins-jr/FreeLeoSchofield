<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
        <?php wp_head(); ?>
    </head>
<body class="full-height">
    <?php wp_body_open(); ?>
    <div id="other-title-and-main-nav">
        <div id="other-title">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_file_uri('img/free_logo_dark.png');?>" /></a>
        </div>
        <?php wp_nav_menu( $args = array(
            'menu'=> 'primary',
            'container_id'=>'other-main-nav'
        ));?>
        
    </div>
