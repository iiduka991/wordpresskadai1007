
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>ビジネスサイト・企業向け 無料ホームページテンプレート tp_biz54</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/js/openclose.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fixmenu_pagetop.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ddmenu_min.js"></script>
<!--[if lt IE 10]>
<style>
.slide0,.slide2,.slide3 {display:none;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="home">

<div id="container">
<?php get_header(); ?>
<div id="contents">

<section>


<?php ?>
<?php  if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?> 
<div class="list">
<figure><?php the_post_thumbnail('full'); ?></figure>
<div class="text">
<?php the_title(); ?>
<?php the_excerpt(); ?>
<p class="btn1"><a href="<?php the_permalink(); ?>">もっとみる</a></p>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

</section>

<section id="new">
<h2>更新情報・お知らせ</h2>
<dl>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
<dt><time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></dt>
<dd><?php the_title(); ?><?php
$days  = 7 ; // ← NEWを表示させる期間の日数を入力
$today = date_i18n('U');
$entry = get_the_time('U');
$total = date('U',($today - $entry)) / 86400 ;
 
   if( $days > $total ){
	   
	   echo '<span class="newicon">NEW';
	   
   }
?></dd>

<?php endwhile; ?>
<?php endif; ?>
	</dl>
</section>

<section>

<h2>テンプレートのご利用前に必ずお読み下さい</h2>

<h3>利用規約のご案内</h3>
<p>このテンプレートは、<a href="https://template-party.com/">Template Party</a>にて無料配布している『ビジネスサイト・企業向け 無料ホームページテンプレート tp_biz54』です。必ずダウンロード先のサイトの<a href="https://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。</p>
<p><strong class="color1">■HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong><br>
わざと見えなく加工する事も禁止です。</p>
<p><strong class="color1">■下部の著作を外したい場合は</strong><br>
<a href="https://template-party.com/">Template-Party</a>の<a href="https://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

<h3>テンプレートに梱包されているjsファイル(javascript)について</h3>
<p>これらのファイルは全てクリタス様提供のプログラムです。jsファイルは改変せずにご利用下さい。<br>
また、当サイトのテンプレート以外に使いたいなど、「プログラムのみ」を使う場合は<a href="http://template-party.com/free_program/openclose_license.html">こちらの規約</a>をお守り下さい。</p>

<h3>当テンプレートにはお問い合わせフォーム（自動フォーム：試用版）がセットされています</h3>
<p><a href="contact.html">contact.html</a>と同じ３項目のお問い合わせフォームを簡単に使えるようにセットしています。</p>
<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="http://template-party.com/file/formgen_manual_set2.html" target="_blank">詳しくはこちらのマニュアルをご覧下さい。</a></p>
<p><strong class="color1">■自動フォームを使わない場合</strong><br>
テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

<h3>当テンプレートの詳しい使い方は</h3>
<p><a href="company.html#about">こちらをご覧下さい。</a></p>

</section>

</div>
<!--/#contents-->

<?php get_footer(); ?>

<!--背景スライドショー-->
<aside id="mainimg">
<div class="slide0">slide0</div>
<div class="slide1">slide</div>
<div class="slide2">slide2</div>
<div class="slide3">slide3</div>
</aside>

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理条件設定　900px以下-->
<script>
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr", "menubar-s");
}
</script>

<!--子メニュー-->
<script>
if (OCwindowWidth() <= 900) {
	open_close("menubar_hdr2", "menubar-s2");
}
</script>

</body>
</html>