<?php get_header(); ?>

  <div id="content">
    <div class="single_wrap u-cf">
      <div class="single_inner">
        
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <p class="single_post_day"><?php echo get_the_date(); ?></p>
        <h2 class="single_post_ttl"><?php the_title(); ?></h2>
        <p class="single_post_category">カテゴリー: <?php the_category(', '); ?></p>
        <hr>

        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>

<?php get_sidebar('single'); ?>

      <div id="page-top" class="go_top_btn">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/go_top.png" alt=""></a>
      </div>
    </div>
  </div>

<?php get_footer(); ?>