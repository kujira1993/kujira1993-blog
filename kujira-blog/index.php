<?php get_header(); ?>
	<div id="content">
		<div class="content_inner">
			<ul class="post_wrap u-cf">

				<?php if (have_posts()) : ?>
				    <?php while (have_posts()) : the_post(); ?>
				    	<li>
				    		<a class="post_link_wrap" href="<?php the_permalink(); ?>">
								<p class="post_thum scale"><?php the_post_thumbnail('thumbnail'); ?></p>
								<div class="post_inner">
									<p class="post_ttl"><?php the_title(); ?></p>
									<span class="post_txt"><?php the_excerpt(); ?></span>
									<hr class="post_line">
									<p class="post_day"><?php echo get_the_date(); ?></p>
								</div>
							</a>
				    	</li>
				    <?php endwhile; ?>
				<?php endif; ?>
			</ul>
			<a href="" class="more_btn">
				MORE POSTS
			</a>
		</div>

		<div id="page-top" class="go_top_btn">
			<a href=""><img src="<?php echo get_template_directory_uri(); ?>/images//go_top.png" alt=""></a>
		</div>

	</div>

<?php get_footer(); ?>