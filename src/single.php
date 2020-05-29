<?php
/**
 * Single Page.
 *
 * @package WP
 */

?>
<?php
get_header();
get_template_part( 'content-sub-header' );

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
	<section class="news-single">
		<figure class="news-single__img-wrapper">
			<?php the_post_thumbnail( 'full' ); ?>
		</figure>
		<div class="news-single__title-wrapper">
			<p class="news-single__date"><?php the_time( 'Y.m.d' ); ?></p>
			<p class="news-single__title"><?php the_title(); ?></p>
		</div>
		<!-- /.news-single__title-wrapper -->
		<div class="news-single__content">
		<?php the_content(); ?>
		</div>
		<!-- /.news-single__content -->
		<?php
		$prev_post = get_previous_post();
		$next_post = get_next_post();
		if ( $prev_post || $next_post ) :
			?>
		<div class="news-single__page-nav">
			<?php if ( $prev_post ) : ?>
			<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="news-single__nav-wrapper">
				<div class="news-single__prev-arrow">&lt;</div>
				<div class="news-single__nav-content">
					<p class="news-single__prev-date"><?php echo esc_html( get_the_time( 'Y.m.d', $prev_post->ID ) ); ?></p>
					<p class="news-single__prev-text"><?php echo esc_html( get_the_title( $prev_post->ID ) ); ?></p>
				</div>
			</a>
				<?php
				else :
					// Dummy tag for justify-content: space-between;.
					?>
				<div></div>
			<?php endif; ?>
			<?php if ( $next_post ) : ?>
			<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="news-single__nav-wrapper news-single__nav-wrapper--next">
				<div class="news-single__nav-content">
					<p class="news-single__next-date"><?php echo esc_html( get_the_time( 'Y.m.d', $next_post->ID ) ); ?></p>
					<p class="news-single__next-text"><?php echo esc_html( get_the_title( $next_post->ID ) ); ?></p>
				</div>
				<div class="news-single__next-arrow">&gt;</div>
			</a>
			<?php endif; ?>
		</div>
			<?php
		endif;
		?>
		<!-- /.news-single_page-nav -->
	</section>
		<?php
	endwhile;
endif;
?>
<?php
get_footer();
