<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Kubrick 2014
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'kubrick' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit Page', 'kubrick' ), '<footer class="entry-footer"><span class="edit-link"><span class="fa fa-pencil"></span> ', '</span></footer>' ); ?>
</article><!-- #post-## -->
