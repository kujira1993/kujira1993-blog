      <div class="sidebar">
    	<ul class="sidebar_inner">
			<li class="sidebar_profile u-cf u-mb20">
				<h6 class="sidebar_inner_ttl">管理人</h6>
				<p class="sidebar_profile_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/profile.jpg" alt="" width="50"></p>
				<p class="u-mb10">運営者の鯨岡です。興味があることや、日々のTipsを書いていこうとおもいます。</p>
				<ul class="sidebar_profile_sns u-cf">
					<li><a href="https://www.facebook.com/daiske.kujiraoka" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile_fb.png" alt="" width="50"></a></li>
					<li><a href="https://twitter.com/DKujiraoka" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile_twitter.png" alt="" width="50"></a></li>
					<li><a href="https://www.instagram.com/kujira1993/" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/profile_insta.png" alt="" width="50"></a></li>
				</ul>
			</li>
			<li class="u-mb20">
				<h6 class="sidebar_inner_ttl">新着記事</h6>
				<?php query_posts('showposts=5'); ?>
				<ul class="sidebar_newposts">
					<?php while (have_posts()) : the_post(); ?>
					<li class="u-cf">
						<a href="<?php the_permalink() ?>" class="sidebar_newposts_thum">
							<?php if( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail('thumbnail'); ?>
								<?php else: ?>
									 <img src="<?php echo get_template_directory_uri(); ?>/images/thumb.jpg" alt="" width="100" height="100">
							<?php endif; ?>
						</a>
						<div class="sidebar_newposts_txt">
							<a class="sidebar_newposts_ttl" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							<p class="sidebar_newposts_day"><?php the_time('Y年m月d日'); ?></p>
						</div>
						
					</li>
					<hr>
					<?php endwhile;?>
				</ul>
			</li>
			<li class="u-mb20">
				<h6 class="sidebar_inner_ttl">カテゴリ</h6>
				<div class="sidebar_category u-cf">
					<?php
					$cat_all = get_terms( "category", "fields=all&get=all" );
					foreach($cat_all as $value):
					?>
					<a href="<?php echo get_category_link($value->term_id); ?>" class="sidebar_category_item"><?php echo $value->name;?></a>
					<?php endforeach; ?>
				</div>
			</li>
    	</ul>
      </div>