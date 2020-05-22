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
	<title>TOP | 完全版マハーバーラタ</title>
	<?php wp_head(); ?>
</head>

<body>
	<header>
		<nav>
			<ul class="nav">
				<li class="nav__item">
					<a class="nav__anchor" href="index.html">
						<p class="nav__title">トップ</p>
						<p class="nav__english">TOP</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="news.html">
						<p class="nav__title">ニュース</p>
						<p class="nav__english">NEWS</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="story.html">
						<p class="nav__title">ストーリー</p>
						<p class="nav__english">STORY</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="comments.html">
						<p class="nav__title">著名人コメント</p>
						<p class="nav__english">COMMENTS</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="cast.html">
						<p class="nav__title">キャスト</p>
						<p class="nav__english">CAST</p>
					</a>
				</li>
				<li class="nav__item">
					<a class="nav__anchor" href="inquiry.html">
						<p class="nav__title">問い合わせ</p>
						<p class="nav__english">INQUIRY</p>
					</a>
				</li>
			</ul>
		</nav>
	</header>
	<!-- ここまでheader -->
