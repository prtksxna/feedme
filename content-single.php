<?php
/**
 * @package feed
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'h-entry' ); ?>>
	<?php if ( has_category('post') ) {
		get_template_part( 'content', 'post' );
	} ?>

	<?php if ( has_category('chat') ) {
		get_template_part( 'content', 'chat' );
	} ?>

	<?php if ( has_category('link') ) {
		get_template_part( 'content', 'link' );
	} ?>

	<?php if ( has_category('photo') ) {
		get_template_part( 'content', 'photo' );
	} ?>

	<?php if ( has_category('status') ) {
		get_template_part( 'content', 'status' );
	} ?>

	<?php if ( has_category('quote') ) {
		get_template_part( 'content', 'quote' );
	} ?>

	<?php if ( has_category('trip') ) {
		get_template_part( 'content', 'trip' );
	} ?>

	<?php if ( has_category('thing') ) {
		get_template_part( 'content', 'thing' );
	} ?>


	<?php if ( has_category('check-in') ) {
		get_template_part( 'content', 'checkin' );
	} ?>
</article><!-- #post-## -->
