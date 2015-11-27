<?php
/*
Template Name: page-contact
*/
?>

<?php get_header(); ?>

  <div id="content">
    <div class="page_wrap u-cf">
      <div class="page_inner">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <h3 id="post-<?php the_ID(); ?>" class="page_inner_ttl"><?php the_title();?></h3>
        <div class="entrytext">
          <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <?php get_sidebar('single'); ?>
    </div>
  </div>


<?php get_footer(); ?>