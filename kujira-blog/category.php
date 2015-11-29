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
<ul id="pagelist"  class="all_post_wrap">
<?php foreach($posts as $post): ?> 
<li class="post u-cf">
      <p class="all_post_thumb"><a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()) { the_post_thumbnail('thumbnail'); } ?></a></p>
      <div class="all_post_inner">
        <h3 class="all_post_ttl"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <span class="all_post_ex"><?php the_excerpt(); ?></span>
        <p class="all_post_day"><?php the_time("Y年m月j日") ?></p>
      </div> 
  <?php endforeach; ?> 
</ul>
    </div>
    <?php get_sidebar('single'); ?>
  </div>
</div>


<?php get_footer(); ?>