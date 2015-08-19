<?php
/**
 * Times Square
 *
 */
	global $times_square_settings, $times_square_copyright;
?>
	<?php get_sidebar( 'footer' ); ?>
    <hr>
    <?php /* WARNING! PLEASE DO NOT REMOVE LOGO/LINK IF YOU STILL NEED TO REMOVE  THEN USE WP ADMIN > APPEARANCE > THEME SETTINGS > REMOVE CREDIS IF YOU DO, YOUR CUSOMIZATIONS WILL BE LOST IN NEXT THEME UPDATE */ ?>
    <footer>
        <?php if(!isset($times_square_settings['remove-credits'])) { ?><p class="copyright pull-right"><a href="http://theme.studiofaca.com/#theme"><?php echo wp_get_theme(); ?> Theme</a> <?php echo __( 'powered by', 'times-square' ); ?> <a href="http://www.wordpress.org/">WordPress</a></p><?php } ?>
    	<?php if(isset($times_square_settings['copyright-information'])) { if($times_square_settings['copyright-information']) { ?><p class="pull-right"><?php echo esc_html($times_square_settings['copyright-information']); ?><?php if(!isset($times_square_settings['remove-credits'])) { ?>&nbsp;|&nbsp;</p><?php } ?><?php } } ?>
        <p>&copy; <?php echo date('Y'); ?> <?php if(isset($times_square_settings['site-information'])) { if($times_square_settings['site-information']) { echo esc_html($times_square_settings['site-information']); } else { bloginfo( 'name' ); echo " | "; bloginfo( 'description' ); } } else { bloginfo( 'name' ); echo " | "; bloginfo( 'description' ); } ?></p>
    </footer>
    <?php /* WARNING! PLEASE DO NOT REMOVE LOGO/LINK IF YOU STILL NEED TO REMOVE  THEN USE WP ADMIN > APPEARANCE > THEME SETTINGS > REMOVE CREDIS IF YOU DO, YOUR CUSOMIZATIONS WILL BE LOST IN NEXT THEME UPDATE */ ?>
    </div><!-- /container -->
	<?php wp_footer(); ?>
  </body>
</html>