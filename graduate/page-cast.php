<?php
/**
 * Cast Page.
 *
 * @package WP
 */

?>
<?php
get_header();
get_template_part( 'content-sub-header' );
?>
	<section class="cast">
		<p class="title cast__title">CAST</p>
		<div class="cast__contents cast--detail">
			<div class="cast__contents-inner">
<?php

/*
キャストの上位3つを取得して表示
3未満の場合はあるだけ表示する
*/

$casts      = SCF::get( 'cast', 5 );
$loop_count = min( count( $casts ), 3 );
for ( $i = 0; $i < $loop_count; $i++ ) :
	// Get IMG URL.
	$img     = $casts[ $i ]['img'];
	$img_url = wp_get_attachment_image_src( $img, 'medium' );
	?>
				<div class="cast__content">
					<div class="cast__img-wrapper">
						<div class="cast__img" style="background-image: url(<?php echo esc_url( $img_url[0] ); ?>);"></div>
					</div>
					<p class="cast__country"><?php echo esc_html( $casts[ $i ]['country'] ); ?></p>
					<p class="cast__name"><?php echo esc_html( $casts[ $i ]['name'] ); ?></p>
					<p class="cast__expert"><?php echo esc_html( $casts[ $i ]['role'] ); ?></p>
					<p class="cast__text"><?php echo nl2br( esc_html( $casts[ $i ]['intro'] ) ); ?></p>
				</div>
				<!-- /.cast__content -->
	<?php
endfor;
?>

			</div>
			<!-- /.cast__contents-inner -->
		</div>
		<!-- /.cast__contents -->
		<div class="cast-detail__sub-cast">
			<div class="cast-detail__cards">
<?php

/*
4個以上キャスト情報があった場合は、簡易表示を行う
*/
$loop_count = count( $casts );
for ( $i = 3; $i < $loop_count; $i++ ) :
	// Get IMG URL.
	$img     = $casts[ $i ]['img'];
	$img_url = wp_get_attachment_image_src( $img, 'medium' );
	?>
				<div class="cast-detail__card">
					<figure class="cast-detail__img-wrapper">
						<img src="<?php echo esc_attr( $img_url[0] ); ?>" alt="<?php echo esc_attr( $casts[ $i ]['name'] ); ?>" class="cast-detail__img">
					</figure>
					<div class="cast-detail__content">
						<p class="cast-detail__country"><?php echo esc_html( $casts[ $i ]['country'] ); ?></p>
						<p class="cast-detail__name"><?php echo esc_html( $casts[ $i ]['name'] ); ?></p>
						<p class="cast-detail__expert"><?php echo esc_html( $casts[ $i ]['role'] ); ?></p>
						<p class="cast-detail__text"><?php echo nl2br( esc_html( $casts[ $i ]['intro'] ) ); ?></p>
					</div>
					<!-- /.cast-detail__content -->
				</div>
				<!-- /.cast-detail__card -->
	<?php
endfor;
?>
			</div>
			<!-- /.cast-detail__cards -->
		</div>
		<!-- /.cast-detail__sub-cast -->
		<div class="cast-detail__musician">
			<p class="title cast-detail__musician-title">MUSICIAN</p>
			<div class="cast-detail__musician-inner">
				<div class="cast-detail__cards">
<?php
$musicians = SCF::get( 'musician', 5 );
foreach ( $musicians as $musician ) :
	// Get IMG URL.
	$img     = $musician['m_img'];
	$img_url = wp_get_attachment_image_src( $img, 'medium' );
	?>
					<div class="cast-detail__card">
						<figure class="cast-detail__img-wrapper">
							<img src="<?php echo esc_attr( $img_url[0] ); ?>" alt="<?php echo esc_attr( $musician['m_name'] ); ?>" class="cast-detail__img">
						</figure>
						<div class="cast-detail__content">
							<p class="cast-detail__country"><?php echo esc_html( $musician['m_country'] ); ?></p>
							<p class="cast-detail__name"><?php echo esc_html( $musician['m_name'] ); ?></p>
							<p class="cast-detail__expert"><?php echo esc_html( $musician['m_role'] ); ?></p>
							<p class="cast-detail__text"><?php echo nl2br( esc_html( $musician['m_intro'] ) ); ?></p>
						</div>
						<!-- /.cast-detail__content -->
					</div>
					<!-- /.cast-detail__card -->
	<?php
endforeach;
?>
				</div>
				<!-- /.cast-detail__cards -->
			</div>
			<!-- /.cast-detail__musician-inner -->
		</div>
		<!-- /.cast-detail__musician -->
		<div class="cast-detail__staff">
			<p class="title cast-detail__staff-title">STAFF</p>
			<div class="cast-detail__cards">
<?php
$staffs = SCF::get( 'staff', 5 );
foreach ( $staffs as $staff ) :
	// Get IMG URL.
	$img     = $staff['s_img'];
	$img_url = wp_get_attachment_image_src( $img, 'medium' );
	?>
				<div class="cast-detail__card">
						<figure class="cast-detail__img-wrapper">
							<img src="<?php echo esc_attr( $img_url[0] ); ?>" alt="<?php echo esc_attr( $staff['s_name'] ); ?>" class="cast-detail__img">
						</figure>
						<div class="cast-detail__content">
							<p class="cast-detail__country"><?php echo esc_html( $staff['s_country'] ); ?></p>
							<p class="cast-detail__name"><?php echo esc_html( $staff['s_name'] ); ?></p>
							<p class="cast-detail__expert"><?php echo esc_html( $staff['s_role'] ); ?></p>
							<p class="cast-detail__text"><?php echo nl2br( esc_html( $staff['s_intro'] ) ); ?></p>
						</div>
						<!-- /.cast-detail__content -->
				</div>
				<!-- /.cast-detail__card -->
	<?php
endforeach;
?>
			</div>
			<!-- /.cast-detail__cards -->
		</div>
	</section>
<?php
get_footer();
