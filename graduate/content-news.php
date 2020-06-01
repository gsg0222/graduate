<?php
/**
 * News.
 *
 * @package WP
 */

?>
	<section class="news">
		<p class="title news__title">NEWS</p>
		<a href="<?php echo esc_url( get_category_link( 2 ) ); ?>" class="btn news__btn">ニュース一覧へ</a>
		<div class="news__cards">
<?php
$args  = array(
	'post_type'      => 'post',
	'category_name'  => 'news',
	'order'          => 'DESC',
	'posts_per_page' => 5,
);
$query = new WP_Query( $args );
$i     = 0;
if ( $query->have_posts() ) :
	while ( $query->have_posts() ) :
		$query->the_post();
		if ( $i < 3 ) :
			?>
			<div class="card news__card">
			<?php
		else :
			?>
			<div class="card card--sub news__card-sub">
			<?php
		endif;
		?>
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
			<!-- /.card__sub news__card-sub -->
		<?php
		$i++;
	endwhile;
endif;
wp_reset_postdata();
?>
		</div>
		<!-- /.news__cards -->
	</section>
