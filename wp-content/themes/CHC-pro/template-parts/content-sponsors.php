<?php
/**
 * Template part for displaying single posts.
 *
 * @package EightMedi Pro
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	$link = get_post_meta( $post->ID, 'eightmedi_pro_sponsor_box_link', true );
	if($link==""){
		$link = get_the_permalink();
	}
	?>
	<header class="entry-header">
		<a href="<?php echo esc_url($link);?>">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</a>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php
		if (has_post_thumbnail()): 
			$image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
		?>
		<figure>
			<a href="<?php echo esc_url($link);?>">
				<img src="<?php echo esc_attr($image[0]); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
			</a>
		</figure>
		<?php
		endif;
		?>
		<?php the_excerpt(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eightmedi-pro' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php eightmedi_pro_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->