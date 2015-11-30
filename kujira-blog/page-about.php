<?php
/*
Template Name: page-about
*/
?>
<?php get_header(); ?>

  <div id="content">
    <div class="page_wrap u-cf">
      <div class="page_inner">
        <h3>このブログについて</h3>
		
		<p>はじめまして、運営者の鯨岡です。</p>
		<p>Webデザインの勉強とフロントエンドの勉強をしています。</p>
        <p>このブログは僕が興味があることや、日々のTipsを書いていこうとおもいます。</p>

        <ul class="sidebar_profile_sns u-cf u-mt20">
			<li class="u-fl u-mr10"><a href="https://www.facebook.com/daiske.kujiraoka" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile_fb.png" alt="" width="50"></a></li>
			<li class="u-fl u-mr10"><a href="https://twitter.com/DKujiraoka" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile_twitter.png" alt="" width="50"></a></li>
			<li class="u-fl"><a href="https://www.instagram.com/kujira1993/" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile_insta.png" alt="" width="50"></a></li>
		</ul>

      <?php get_template_part( 'sns' ); ?>
      </div>
      <?php get_sidebar('single'); ?>
    </div>
  </div>

<?php get_footer(); ?>