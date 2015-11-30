<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="UTF-8">
	<meta name="description" content="<?php the_excerpt() ; ?>">
	<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1" />
	
	<!-- ここからOGP -->
	<meta property="fb:admins" content="1440403052838898" /><!-- 自分のFacebookアカウントに対応するid -->
	<meta property="og:type" content="blog">
	<?php
	if (is_single()){//単一記事ページの場合
	     if(have_posts()): while(have_posts()): the_post();
	          echo '<meta property="og:description" content="'.get_post_meta($post->ID, _aioseop_description, true).'">';echo "\n";//抜粋を表示
	     endwhile; endif;
	     echo '<meta property="og:title" content="'; the_title(); echo '">';echo "\n";//単一記事タイトルを表示
	     echo '<meta property="og:url" content="'; the_permalink(); echo '">';echo "\n";//単一記事URLを表示
	} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
	     echo '<meta property="og:description" content="'; bloginfo('description'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログの説明文を表示
	     echo '<meta property="og:title" content="'; bloginfo('name'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのタイトルを表示
	     echo '<meta property="og:url" content="'; bloginfo('url'); echo '">';echo "\n";//「一般設定」管理画面で指定したブログのURLを表示
	}
	?>
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<?php
	$str = $post->post_content;
	$searchPattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';//投稿にイメージがあるか調べる
	if (is_single()){//単一記事ページの場合
	if (has_post_thumbnail()){//投稿にサムネイルがある場合の処理
	     $image_id = get_post_thumbnail_id();
	     $image = wp_get_attachment_image_src( $image_id, 'full');
	     echo '<meta property="og:image" content="'.$image[0].'">';echo "\n";
	} else if ( preg_match( $searchPattern, $str, $imgurl ) && !is_archive()) {//投稿にサムネイルは無いが画像がある場合の処理
	     echo '<meta property="og:image" content="'.$imgurl[2].'">';echo "\n";
	} else {//投稿にサムネイルも画像も無い場合の処理
	     echo '<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/thumb.jpg">';echo "\n";
	}
	} else {//単一記事ページページ以外の場合（アーカイブページやホームなど）
	     echo '<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/thumb.jpg">';echo "\n";
	}
	?>
	<!-- ここまでOGP -->

	<title>kujira1993.web記録帳</title>

	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/icomoon/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<?php
	wp_enqueue_script('jquery');
	wp_enqueue_script('app','/wp-content/themes/kujira-blog/assets/js/app.js',array('jquery'),'0.1.0');
	wp_enqueue_script('sns','/wp-content/themes/kujira-blog/assets/js/sns.js',array('jquery'),'0.1.0');
	?>
	<?php wp_head(); ?>

	<script src="https://apis.google.com/js/platform.js" async defer>{lang: 'ja'}</script>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=1440403052838898";
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
					<a href="<?php echo home_url('/'); ?>posts-all/" class="category">記事一覧</a>
				</li>
				<!-- <li>
					<a href="<?php echo home_url('/'); ?>category/" class="category">カテゴリ</a>
				</li> -->
				<!-- <li class="global_nav_search">
					<a href="" class="search">検索</a>
				</li> -->
			</ul>

			<p id="jsMenuBtn" class="menu_btn"><img src="<?php echo get_template_directory_uri(); ?>/images/menu_btn.png" alt="" width="100%" class="imgChange"></p>
		</div>
	</div>