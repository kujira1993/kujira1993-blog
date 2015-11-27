<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="kujira1993. web記録帳 TOPページ">
	<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
	<title>kujira1993.web記録帳</title>

	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<?php
	wp_enqueue_script('jquery');
	wp_enqueue_script('app','/wp-content/themes/kujira-blog/assets/js/app.js',array('jquery'),'0.1.0');
	wp_enqueue_script('sns','/wp-content/themes/kujira-blog/assets/js/sns.js',array('jquery'),'0.1.0');
	?>
	<?php wp_head(); ?>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=235637456624550";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div class="header">
		<div class="header_inner u-cf">
			<div class="logo_wrap">
				<h1><a href="<?php echo home_url('/'); ?>" class="logo">Kujira1993.</a></h1>
				<h2 class="sub_ttl">web記録帳</h2>
			</div>

			<ul class="global_nav u-cf">
				<li>
					<a href="<?php echo home_url('/'); ?>" class="home">HOME</a>
				</li>
				<li>
					<a href="<?php echo home_url('/'); ?>about-blog/" class="about">このブログについて</a>
				</li>
				<li>
					<a href="<?php echo home_url('/'); ?>contact/" class="contact">コンタクト</a>
				</li>
				<li>
					<a href="<?php echo home_url('/'); ?>category/" class="category">カテゴリ</a>
				</li>
				<li class="global_nav_search">
					<a href="" class="search">検索</a>
				</li>
			</ul>

			<p id="jsMenuBtn" class="menu_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/menu_btn.png" alt="" width="100%" class="imgChange"></p>
		</div>
	</div>