<?php
/**
 * The template part for displaying results in search pages
 *
 * @package WordPress
 * @subpackage JFC
 * @since JFC 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php jfc_post_thumbnail(); ?>

	<?php jfc_excerpt(); ?>

	<?php if ( 'post' === get_post_type() ) : ?>

		<footer class="entry-footer">
			<?php jfc_entry_meta(); ?>
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Post title. */
						__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'jfc' ),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->

	<?php else : ?>

		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'jfc' ),
					get_the_title()
				),
				'<footer class="entry-footer"><span class="edit-link">',
				'</span></footer><!-- .entry-footer -->'
			);
		?>

	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

