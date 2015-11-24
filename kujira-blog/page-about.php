<!-- ヘッダー読み込み header.phpを読み込んでくれる -->
<?php get_header(); ?>

   <div id="contents">

	<!-- メイン部分の読み込み loop.phpを読み込んでくれる -->
	<?php get_template_part( 'loop' ); ?>

	<!-- サイドバー読み込み sidebar.phpを読み込んでくれる -->
	<?php get_sidebar(); ?>


   </div><!-- /#contents -->

<!-- フッター読み込み footer.phpを読み込んでくれる -->
<?php get_footer(); ?>