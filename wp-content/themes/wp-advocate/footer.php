	
	</div><!-- #container -->
    
	<div class="push"></div>
    
</div><!-- #wrapper -->

<footer id="colophon" role="contentinfo">
    <div id="site-generator">

        <?php echo __('&copy; ', 'wp-advocate') . esc_attr( get_bloginfo( 'name', 'display' ) );  ?>
        <span><?php if(is_home() || is_front_page()): ?>
            - <?php echo __( 'Thanks to ','wp-advocate' ); ?><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp-advocate' ) ); ?>" target="_blank"><?php printf('%s', 'WordPress' ); ?></a> <span><?php _e('and','wp-advocate'); ?></span> <a href="<?php echo esc_url( __( 'https://wpdevshed.com/themes/advocate/', 'wp-advocate' ) ); ?>" target="_blank"><?php printf( esc_html( '%s', 'wp-advocate' ), 'WP Advocate' ); ?></a>
        <?php endif; ?>
        </span>
        <?php wp_advocate_footer_nav(); ?>
        
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>


</body>
</html>