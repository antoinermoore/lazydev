<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lazydelivery
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            
            <div class="footer-wrapper">
            
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer")) { ?>
               
            
               <?php }?>
            
            <div style="clear:both;"></div>
            <div class="upper-line">
<div class="site-info">
			<!--<a href="<?php echo esc_url( __( 'http://www.modblu.com', 'lazydelivery' ) ); ?>"><?php printf( __( 'Designed By %s', 'lazydelivery' ), 'Modblu Media' ); ?></a>
			<span class="sep"> | </span>-->
			&copy; <?php echo date('Y'); ?> <?php printf( __( ' %2$s.', 'lazydelivery' ), 'lazydelivery', '<a href="http://www.lazydelivery" >Lazy Delivery</a>' ); ?> 
		</div><!-- .site-info -->
                </div>
            </div>
	</footer><!-- #colophon -->
</div><!-- #page --> 

<?php wp_footer(); ?>

</body>
</html>