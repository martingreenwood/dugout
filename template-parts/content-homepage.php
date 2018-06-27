<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dugout
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('hero'); ?>>
	<?php
		the_content();
	?>
	<a href="#showreel" class="watch" title=""><i class="far fa-play-circle"></i> Watch the video</a>
</article>
