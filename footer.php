<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Casper
 */
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
	    <a class="subscribe icon-feed" href="<?php bloginfo('rss2_url'); ?>"><span class="tooltip"><?php _e('Subscribe!', 'casper'); ?></span></a>
		<div class="site-info inner">
		    <section class="copyright">
		    	<?php if(  false == get_theme_mod( 'casper_custom_footer') ) { ?>
		    		<?php printf( __( '<a href="%1$s" rel="home">Download Casper Mkhuda</a>', 'casper' ), esc_url( 'https://github.com/mkhuda/casper-mkhuda' ) ); ?>
		    	<?php } else { echo get_theme_mod( 'casper_custom_footer'); } ?>
		    </section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</main><!-- /#content -->

<?php wp_footer(); ?>
</body>
</html>
