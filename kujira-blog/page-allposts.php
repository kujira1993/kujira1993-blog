<?php
/*
Template Name: page-allposts
*/
?>

<?php get_header(); ?>

  <div id="content">
    <div class="page_wrap u-cf">
      <div class="page_inner">
        <h3>新着記事一覧</h3>
        <ul class="all_post_wrap">
            <?php query_posts('post_type=post&paged='.$paged); ?>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <li class="post u-cf">
            
              <p class="all_post_thumb"><a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()) { the_post_thumbnail('thumbnail'); } ?></a></p>
              <div class="all_post_inner">
                <h3 class="all_post_ttl"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <span class="all_post_ex"><?php the_excerpt(); ?></span>
                <p class="all_post_day"><?php the_time("Y年m月j日") ?></p>
              </div>
            </li>
            <?php endwhile; ?>
            <?php else : ?>
            <li class="post">
              <h2>記事が見つかりません</h2>
              <p></p>
            </li>
          <?php endif; ?>
        </ul>

        <?php get_template_part( 'sns' ); ?>
      </div>
      <?php get_sidebar('single'); ?>
    </div>
  </div>

<?php get_footer(); ?>