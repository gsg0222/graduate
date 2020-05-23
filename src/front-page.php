<?php
/**
 * Home Page.
 *
 * @package WP
 */

?>
<?php get_header(); ?>
	<section class="main-visual">
		<figure class="main-visual__title">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/main-title.png" alt="完全版マハーバーラタ">
		</figure>
		<div class="main-visual__content">
			<div class="main-visual__date">
				<figure>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/date.png" alt="2020年7月4日から7日、なかのZERO大ホール">
				</figure>
			</div>
			<div class="main-visual__text">
				<p>
					小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>
					アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
				</p>
			</div>
			<!-- /.main-visual__text -->
		</div>
		<!-- /.main-visual__content -->
		<a href="<?php the_field( 'url' ); ?>" class="btn btn--large main-visual__btn">チケット予約サイトへ</a>
	</section>

	<section class="introduction">
		<p class="title introduction__title">INTRODUCTION</p>
		<p class="introduction__sub-title">なぜ今「マハーバーラタ」なのか？</p>
		<div class="introduction__content">
			<p class="introduction__text">
				「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
				それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
				平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。</p>
			<p class="introduction__text">現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
				神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
				非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。</p>
		</div>
		<!-- /.introduction__content -->
	</section>

	<section class="news">
		<p class="title news__title">NEWS</p>
		<a href="#" class="btn news__btn">ニュース一覧へ</a>
		<div class="news__cards">
			<div class="card news__card">
				<a href="#" class="card__anchor">
					<figure class="card__img-wrapper">
						<img class="card__img" src="img/news1.png" alt="ニュース1">
					</figure>
					<div class="card__body">
						<p class="card__date">2019.9.30</p>
						<p class="card__text">「完全版マハーバーラタ」2020年7月・東京公演！！</p>
					</div>
				</a>
				<!-- /.card__body -->
			</div>
			<!-- /.card news__card -->
			<div class="card news__card">
				<a href="#" class="card__anchor">
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
			<!-- /.card news__card -->
			<div class="card news__card">
				<a href="#" class="card__anchor">
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
			<!-- /.card news__card -->
			<div class="card card--sub news__card-sub">
				<a href="#" class="card__anchor">
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
			<!-- /.card__sub news__card-sub -->
			<div class="card card--sub news__card-sub">
				<a href="#" class="card__anchor">
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
			<!-- /.card__sub news__card-sub -->
		</div>
		<!-- /.news__cards -->
	</section>

	<section class="story">
		<p class="title title--white story__title">STORY</p>
		<div class="story__content">
			<p class="story__text">
				マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
				世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。<br>
				<br>
				インドだけでなくアジア全般で広く知られた作品であり、TVドラマや映画の原案として使われることも多い。全編舞台化の難しさ日本では、イギリスの演出家ピーター・ブルックがワールドツアーの一環として1988年6月に銀座セゾン劇場で上演。三部作であったが、上演時間は9時間にも及んだ。<br>
				日本人の作品としては演出家・宮城聰が『マハーバーラタ～ナラ王の冒険』や歌舞伎作品『極付印度伝マハーバーラタ戦記』として、「マハーバーラタ」の長大なストーリーの一部分を舞台化した。全編上映はブルック以外にめぼしい作品は世界的にも存在しない。
			</p>
		</div>
		<!-- /.story__text -->
		<div class="story__btn">
			<a href="#" class="btn ">もっと詳しく</a>
		</div>
		<!-- /.story__btn -->
	</section>

	<section class="comments">
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

	<section class="cast">
		<p class="title cast__title">CAST</p>
		<div class="cast__contents cast--detail">
			<div class="cast__contents-inner">
				<div class="cast__content">
					<div class="cast__img-wrapper">
						<div class="cast__img" style="background-image: url(img/koike.png);"></div>
					</div>
					<p class="cast__country">日本</p>
					<p class="cast__name">小池博史</p>
					<p class="cast__expert"></p>
					<p class="cast__text">茨城県日立市出身。一橋大学卒業。<br>
						演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
						1982年「パパ・タラフマラ」設立。<br>
						演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
						3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br>
						著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。</p>
				</div>
				<!-- /.cast__content -->
				<div class="cast__content">
					<div class="cast__img-wrapper">
						<div class="cast__img" style="background-image: url(img/koike.png);"></div>
					</div>
					<p class="cast__country">日本</p>
					<p class="cast__name">小池博史</p>
					<p class="cast__expert"></p>
					<p class="cast__text">茨城県日立市出身。一橋大学卒業。<br>
						演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
						1982年「パパ・タラフマラ」設立。<br>
						演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
						3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br>
						著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。</p>
				</div>
				<!-- /.cast__content -->
				<div class="cast__content">
					<div class="cast__img-wrapper">
						<div class="cast__img" style="background-image: url(img/koike.png);"></div>
					</div>
					<p class="cast__country">日本</p>
					<p class="cast__name">小池博史</p>
					<p class="cast__expert">(テスト)</p>
					<p class="cast__text">茨城県日立市出身。一橋大学卒業。<br>
						演出家・作家・振付家・舞台美術家・写真家、舞台芸術の学校（P.A.I.）校長。<br>
						1982年「パパ・タラフマラ」設立。<br>
						演劇、舞踊、オペラ、美術、建築等、ジャンルを縦横に渡りながら空間を築き上げてゆく手法で、国際的に高い評価を確立。<br>
						3.11を受けて、翌2012年5月にパパ・タラフマラ解散。すぐに「小池博史ブリッジプロジェクト」を立ち上げ、作品を創作しながら、若手表現者の育成と芸術文化事業のプロデュースを手掛けるなど、活動は多岐に渡る。<br>
						著書に「ロンググッドバイ～パパ・タラフマラとその時代」（青幻舎刊）、「からだのこえをきく」（新潮社刊）等。</p>
				</div>
				<!-- /.cast__content -->
			</div>
			<!-- /.cast__contents-inner -->
		</div>
		<!-- /.cast__contents -->
		<div class="cast-detail__sub-cast">
			<div class="cast-detail__card">
				<figure class="cast-detail__img-wrapper">
					<img src="img/shirai.png" alt="白井さち子" class="cast-detail__sub-cast-img">
				</figure>
				<div class="cast-detail__content">
					<p class="cast-detail__role">出演</p>
					<p class="cast-detail__name">白井さち子</p>
					<p class="cast-detail__expert">(バレエ、コンテンポラリーダンス)</p>
					<p class="cast-detail__text">7歳よりクラシックバレエを始める。<br>
						82年より6年間橘バレエ学校に在籍。<br>
						牧阿佐美に師事。<br>
						日本女子体育短期大学舞踊コース卒。<br>
						在籍中、太田順造にパントマイムを師事。</p>
				</div>
				<!-- /.cast-detail__sub-cast-content -->
			</div>
			<!-- /.cast-detail__sub-cast-card -->
		</div>
		<!-- /.cast-detail__sub-cast -->
	</section>
<?php
get_footer();
