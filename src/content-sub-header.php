<?php
/**
 * Sub Header.
 *
 * @package WP
 */

?>
	<section class="sub-header">
		<div class="sub-header__wrapper">
			<div class="sub-header__img-wrapper">
				<figure class="sub-header__title-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/main-title.png" alt="完全版マハーバーラタ">
				</figure>
				<figure class="sub-header__date-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/date.png" alt="2020年7月4日から7日、なかのZERO大ホール">
				</figure>
				<a href="<?php the_field( 'url', 5 ); ?>" class="btn btn--medium sub-header__btn">チケット予約サイトへ</a>
			</div>
			<!-- /.sub-header__img-wrapper -->
		</div>
		<!-- /.sub-header__wrapper -->
		<div class="breadcrumbs sub-header__breadcrumbs">
<?php
if ( function_exists( 'bcn_display' ) ) {
	bcn_display();
}
?>
		</div>
	</section>
