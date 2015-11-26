<?php
/*
Template Name: page-allposts
*/
?>

<?php get_header(); ?>

  <div id="content">
    <div class="page_wrap u-cf">
      <div class="page_inner">
        <?php the_post() ?>
        <h2 class="page_title"><?php the_title(); ?></h2>
        <div class="entry_content">
          <?php the_content() ?>
          // 全記事表示
          <?php wp_get_archives("type=postbypost");?>
        </div>
      </div>
      <?php get_sidebar('single'); ?>
    </div>
  </div>


<?php get_footer(); ?>