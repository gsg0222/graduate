<?php
/**
 * Story Page.
 *
 * @package WP
 */

?>
<?php
get_header();
?>
	<section class="story-detail">
<?php
$story  = SCF::get( 'story' );
$length = count( $story );
for ( $i = 0; $i < $length; $i++ ) :
	$img       = $story[ $i ]['story_img'];
	$img_url   = wp_get_attachment_image_src( $img, 'full' );
	$text      = $story[ $i ]['story_text'];
	$sub_title = $story[ $i ]['story_title'];
	?>
	<?php
	if ( 0 === $i % 2 ) :
		?>
		<div class="story-detail__left-contents"
			style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.8)), url(<?php echo esc_url( $img_url[0] ); ?>);">
		<?php
	else :
		?>
		<div class="story-detail__right-contents"
			style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.1) 50%, rgba(0, 0, 0, 0.1)), url(<?php echo esc_url( $img_url[0] ); ?>);">
		<?php
	endif;
	?>
	<?php
	if ( 0 === $i ) :
		?>
			<div class="sub-header__wrapper story-detail__no-bgi">
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
			<p class="title title--white story-detail__title">STORY</p>
		<?php
	endif;
	?>
			<p class="story-detail__sub-title"><?php echo esc_html( $sub_title ); ?></p>
	<?php
	if ( 0 === $i % 2 ) :
		?>
			<div class="story-detail__right-content">
		<?php
	else :
		?>
			<div class="story-detail__left-content">
		<?php
	endif;
	?>
				<p class="story-detail__text"><?php echo nl2br( esc_html( $text ) ); ?></p>
			</div>
			<!-- /.story-detail__right-content -->

		</div>
		<!-- /.story-detail__left-contents -->

	<?php
endfor;
?>
	</section>
<?php
get_footer();
