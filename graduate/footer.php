<?php
/**
 * Footer.
 *
 * @package WP
 */

?>
	<!-- この下からfooter -->
	<section class="schedule">
		<div class="schedule__wrapper">
			<p class="title schedule__title">SCHEDULE</p>
			<div class="schedule__contents">
<?php
// 5 はトップページの投稿ID.
$schedule = SCF::get( 'schedule', 5 );
foreach ( $schedule as $row ) :
	?>
				<p class="schedule__content">
					<span class="schedule__text"><?php echo esc_html( $row['date'] ); ?></span>
					<span class="schedule__text"><?php echo esc_html( $row['start_time'] ); ?></span>
					<span class="schedule__text"><?php echo esc_html( $row['hall'] ); ?></span>
					<span class="schedule__text"><?php echo esc_html( $row['state'] ); ?></span>
					<span class="schedule__text"><a href="<?php echo esc_html( $row['link_url'] ); ?>" class="schedule__link"><?php echo esc_html( $row['link_text'] ); ?></a></span>
				</p>
	<?php
endforeach;
?>
			</div>
			<!-- /.schedule__contents -->
		</div>
		<!-- /.schedule__wrapper -->
		<div class="schedule__btns">
			<a href="<?php echo esc_url( get_permalink( 14 ) ); ?>" class="btn btn--large-brown schedule__contact-btn">お問い合わせはこちら</a>
			<a href="<?php the_field( 'url' ); ?>" class="btn btn--large schedule__ticket-btn">チケット予約サイトへ</a>
		</div>
		<!-- /.schedule__btns -->
	</section>

	<footer class="footer">
		<small class="footer__copy">Copyright &copy; 2019 完全版マハーバーラタ All Rights Reserved.</small>
	</footer>
	<?php wp_footer(); ?>
</body>

</html>
