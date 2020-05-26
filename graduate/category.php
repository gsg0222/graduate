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
						<img class="card__img" src="img/news1.png" alt="ニュース1">
					</figure>
					<div class="card__body">
						<p class="card__date">2019.9.30</p>
						<p class="card__text">「完全版マハーバーラタ」2020年7月・東京公演！！</p>
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
		<div class="wp-pagenavi">
			<a class="previouspostslink" rel="prev" href="#">&lt;</a>
			<span class="current">1</span>
			<a class="page larger" href="#">2</a>
			<a class="nextpostslink" rel="next" href="#">&gt;</a>
		</div>
		<!-- /.wp-pagenavi -->
	</section>
<?php
get_footer();
