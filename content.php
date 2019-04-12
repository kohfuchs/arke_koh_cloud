<?php
/**
 * Template part for displaying posts
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 *
 * @package    Arke
 * @copyright  Copyright (c) 2018, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */

?>

<article <?php post_class(); ?>>

	<?php arke_thumbnail( 'arke-blog' ); ?>

	<header class="entry-header">

		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<small><p> <?php the_date($d); ?> - <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p></small>
		<?php else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); 
			?>
			<small><p> <?php the_date($d); ?> - <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p></small>
		<?php endif; 
		?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if( ! is_front_page() && ! is_author() ) {
    		the_content( esc_html__( 'Continue reading &rarr;', 'arke' ) );
			}

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'arke' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
