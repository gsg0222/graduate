<?php
/**
 * Comments Page.
 *
 * @package WP
 */

?>
<?php
get_header();
get_template_part( 'content-sub-header' );
?>
	<section class="comments comments--detail">
		<p class="title comments__title">COMMENTS</p>
		<p class="comments__caption">舞台関係者のみならず各界著名人からコメントが届いています！</p>
		<div class="comments__content">
			<p class="comments__person">京都佛立ミュージアム館長 <span class="comments__name">長松清潤</span></p>
			<p class="comments__text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
				まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
		</div>
		<!-- /.comments__content -->
		<a href="" class="btn comments__btn">もっと見る</a>
	</section>
	<section class="comments-detail">
<?php
$comments_detail = SCF::get( 'comments' );
foreach ( $comments_detail as $comment_detail ) :
	?>
		<div class="comments-detail__card">
			<p class="comments-detail__name"><?php echo esc_html( $comment_detail['comments_name'] ); ?></p>
			<p class="comments-detail__expert"><?php echo esc_html( $comment_detail['comments_expert'] ); ?></p>
			<p class="comments-detail__text"><?php echo nl2br( esc_html( $comment_detail['comments_text'] ) ); ?></p>
		</div>
		<!-- /.comments-detail__card -->
	<?php
endforeach;
?>
	</section>

<?php
get_footer();
