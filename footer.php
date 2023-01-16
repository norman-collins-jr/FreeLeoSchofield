<footer>
    <div id="footer-content">
        <div id="area-1">
            <h3>Navigation</h3>
            <?php wp_nav_menu( $args = array(
                'menu'=> 'footer',
                'container_id'=>'footer-menu'
            ));?>
            <hr class="footer-divider">
        </div>
        <div id="copyright-and-advertisement">
            &copy; Crissie Carter. All rights reserved.<br>
            Website created by Norman Collins Web Design
        </div>
        <div id="area-2">
            &nbsp;
        </div>
        
    </div>
    
</footer>
<?php wp_footer(); ?>
</body>
</html>