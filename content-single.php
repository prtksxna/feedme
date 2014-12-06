<?php
/**
 * @package feed
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_category('post') ) {
		get_template_part( 'content', 't-post' );
	} ?>

	<?php if ( has_category('chat') ) {
		get_template_part( 'content', 't-chat' );
	} ?>

	<?php if ( has_category('link') ) {
		get_template_part( 'content', 't-link' );
	} ?>

	<?php if ( has_category('photo') ) {
		get_template_part( 'content', 't-photo' );
	} ?>

	<?php if ( has_category('status') ) {
		get_template_part( 'content', 't-status' );
	} ?>

	<?php if ( has_category('quote') ) {
		get_template_part( 'content', 't-quote' );
	} ?>

	<?php if ( has_category('trip') ) {
		get_template_part( 'content', 't-trip' );
	} ?>

	<?php if ( has_category('thing') ) {
		get_template_part( 'content', 't-thing' );
	} ?>


	<?php if ( has_category('check-in') ) {
		get_template_part( 'content', 't-checkin' );
	} ?>
</article><!-- #post-## -->
