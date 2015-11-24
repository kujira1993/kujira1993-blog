<?php get_header();?>

<?php
if (have_posts()) : 
  while (have_posts()) :
    the_post();
    get_template_part('');
  endwhile;
endif;
?>

<?php get_sidebar();?>

<?php get_footer();?>