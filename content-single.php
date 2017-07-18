<?php
/**
 * @package feed
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'h-entry' ); ?>>
	<?php
	if ( has_category('post') ) {
		get_template_part( 'content', 'post' );
	} elseif ( has_category('chat') ) {
		get_template_part( 'content', 'chat' );
	} elseif ( has_category('link') ) {
		get_template_part( 'content', 'link' );
	} elseif ( has_category('photo') ) {
		get_template_part( 'content', 'photo' );
	} elseif ( has_category('status') ) {
		get_template_part( 'content', 'status' );
	} elseif ( has_category('quote') ) {
		get_template_part( 'content', 'quote' );
	} elseif ( has_category('trip') ) {
		get_template_part( 'content', 'trip' );
	} elseif ( has_category('thing') ) {
		get_template_part( 'content', 'thing' );
	} elseif ( has_category('check-in') ) {
		get_template_part( 'content', 'checkin' );
	} else {
		get_template_part( 'content', 'post' );
	}
	?>
</article><!-- #post-## -->
