<?php
/*
Template Name: category
*/
?>

<?php get_header(); ?>

  <div id="content">
    <div class="page_wrap u-cf">
      <div class="page_inner">

<h3><?php the_category(' / ') ?>の最新記事</h3>
<?php 

$cat = get_the_category(); $cat = $cat[0]; 
$cat = $cat->cat_ID; 
$posts = get_posts("order=asc&category=$cat&numberposts=-1"); 
?> 
<ul id="pagelist">
<?php foreach($posts as $post): ?> 
<li><p class="post_thum scale"><?php the_post_thumbnail('thumbnail'); ?></p><?php the_time('Y年m月d日'); ?>:<a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li> 
<?php endforeach; ?> 
</ul>

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

    </div>
    <?php get_sidebar('single'); ?>
  </div>
</div>


<?php get_footer(); ?>