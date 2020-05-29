<?php
/**
 * Category Page.
 *
 * @package WP
 */

?>
<?php
get_header();
get_template_part( 'content-sub-header' );
?>
	<section class="news-list">
		<p class="title news-list__title">NEWS</p>
		<div class="news-list__cards">
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
			<div class="card news-list__card">
				<a href="<?php the_permalink(); ?>" class="card__anchor">
					<figure class="card__img-wrapper">
						<?php the_post_thumbnail( 'medium' ); ?>
					</figure>
					<div class="card__body">
						<p class="card__date"><?php the_time( 'Y.m.d' ); ?></p>
						<p class="card__text"><?php the_title(); ?></p>
					</div>
					<!-- /.card__body -->
				</a>
			</div>
			<!-- /.card news-list__card -->
		<?php
	endwhile;
endif;
?>
		</div>
		<!-- /.news-list__cards -->
<?php
if ( function_exists( 'wp_pagenavi' ) ) {
	wp_pagenavi();
}
?>
	</section>
<?php
get_footer();
