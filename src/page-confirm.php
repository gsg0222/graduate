<?php
/**
 * Inquiry Page.
 *
 * @package WP
 */

?>
<?php
get_header();
get_template_part( 'content-sub-header' );
?>
	<section class="confirm">
		<p class="title confirm__title">INQUIRY</p>
		<div class="confirm__wrapper">
			<p class="confirm__text">
				お問い合わせありがとうございました。<br>
				メッセージは正常に送信されました。
			</p>
		</div>
		<!-- /.confirm__wrapper -->
	</section>

<?php
get_template_part( 'content-news' );
?>
<?php
get_footer();
