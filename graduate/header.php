<?php
/**
 * Header.ナビゲーションまでがヘッダー扱い.
 *
 * @package WP
 */

?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<nav>
			<ul class="nav">
				<li class="nav__item">
					<a class="nav__anchor" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<p class="nav__title">トップ</p>
						<p class="nav__english">TOP</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="<?php echo esc_url( get_category_link( 2 ) ); ?>">
						<p class="nav__title">ニュース</p>
						<p class="nav__english">NEWS</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="<?php echo esc_url( get_permalink( 8 ) ); ?>">
						<p class="nav__title">ストーリー</p>
						<p class="nav__english">STORY</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="<?php echo esc_url( get_permalink( 10 ) ); ?>">
						<p class="nav__title">著名人コメント</p>
						<p class="nav__english">COMMENTS</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="<?php echo esc_url( get_permalink( 12 ) ); ?>">
						<p class="nav__title">キャスト</p>
						<p class="nav__english">CAST</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="<?php echo esc_url( get_permalink( 14 ) ); ?>">
						<p class="nav__title">問い合わせ</p>
						<p class="nav__english">INQUIRY</p>
					</a>
				</li>
			</ul>
		</nav>
	</header>
	<!-- ここまでheader -->
