<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dugout
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('hero columns five'); ?>>
	<?php
		the_content();
	?>
</article>
