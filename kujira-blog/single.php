<?php get_header(); ?>

  <div id="content">
    <div class="single_wrap u-cf">
      <div class="single_inner">
        
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <p class="single_post_day"><?php echo get_the_date(); ?></p>
        <h2 class="single_post_ttl"><?php the_title(); ?></h2>
        <p class="single_post_category">カテゴリー: <?php the_category(' '); ?></p>
        <hr>

        <?php the_content(); ?>
        <?php endwhile; endif; ?>

        <div class="social-area-syncer">
          <p class="u-tc">よかったらシェアお願いします！</p>
          <ul class="social-button-syncer">
            <!-- Twitter ([Tweet]の部分を[ツイート]にすると日本語にできます) -->
            <li class="sc-tw"><a data-url="<?php the_permalink(); ?>" href="https://twitter.com/share" class="twitter-share-button" data-lang="ja" data-count="vertical" data-dnt="true" target="_blank"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.375-1.337.648-2.085.795-.598-.638-1.45-1.036-2.396-1.036-1.812 0-3.282 1.468-3.282 3.28 0 .258.03.51.085.75C5.152 5.39 2.733 4.084 1.114 2.1.83 2.583.67 3.147.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.416-.02-.617-.058.418 1.304 1.63 2.253 3.067 2.28-1.124.88-2.54 1.404-4.077 1.404-.265 0-.526-.015-.783-.045 1.453.93 3.178 1.474 5.032 1.474 6.038 0 9.34-5 9.34-9.338 0-.143-.004-.284-.01-.425.64-.463 1.198-1.04 1.638-1.7z" fill="#fff" fill-rule="nonzero"/></svg><span>Tweet</span></a></li>

            <!-- Facebook -->
            <li class="sc-fb"><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div></li>

            <!-- Google+ -->
            <li><div data-href="<?php the_permalink(); ?>" class="g-plusone" data-size="tall"></div></li>

            <!-- はてなブックマーク -->
            <li><a href="http://b.hatena.ne.jp/entry/<?php the_permalink(); ?>" class="hatena-bookmark-button" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border:none;" /></a></li>

            <!-- pocket -->
            <li><a data-save-url="<?php the_permalink(); ?>" data-pocket-label="pocket" data-pocket-count="vertical" class="pocket-btn" data-lang="en"></a></li>
          </ul>

          <!-- Facebook用 -->
          <div id="fb-root"></div>
        </div>
        
        <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="2"></div>

      </div>

<?php get_sidebar('single'); ?>

      <div id="page-top" class="go_top_btn">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/go_top.png" alt=""></a>
      </div>
    </div>
  </div>

<?php get_footer(); ?>