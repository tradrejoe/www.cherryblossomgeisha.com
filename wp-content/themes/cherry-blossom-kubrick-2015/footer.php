<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Kubrick 2014
 */
?>

	</div><!-- #content -->
</div><!-- #wrapper -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<p class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'kubrick' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'kubrick' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s.', 'kubrick' ), 'Kubrick 2014' ); ?>
		</p><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
	var masthead = document.getElementById('masthead');
	if (masthead) masthead.style.height = '200px';
</script>
</body>
</html>
