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
	<section class="inquiry">
		<p class="title inquiry__title">INQUIRY</p>
		<div class="inquiry__wrapper">
			<p class="inquiry__text">小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>
				公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
				お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>
<?php echo do_shortcode( '[contact-form-7 id="75" title="contact1"]' ); ?>
		</div>
		<!-- /.inquiry-wrapper -->
	</section>
<?php
get_footer();
