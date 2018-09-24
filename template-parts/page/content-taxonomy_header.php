<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
content-taxonomy_header.php
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
  </header><!-- .entry-header -->

	<div class="resource-category-overview entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->
</article>
