<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package feed
 */
?>
	</div><!-- .row -->
	</div><!-- #content -->

	<footer id="colophon" class="container site-footer" role="contentinfo">
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/leaflet.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/mapper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/tripper.js"></script>

</body>
</html>
