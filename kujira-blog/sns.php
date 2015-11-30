        <div class="social-area-syncer">
          <p class="u-tc">よかったらシェアお願いします！</p>

          <div class="snsshare u-cf">
            <a id="share_fb" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>"onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">
            <i class="icon-facebook"></i><span class="sp-hide">Facebookでシェア</span>
          </a>
          <a id="share_tw" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=DKujiraoka" target="blank">
            <i class="icon-twitter"></i>
            <span class="sp-hide">Twitterでシェア</span>
          </a>
          <a id="share_google" href="javascript:(function(){window.open('https://plusone.google.com/_/+1/confirm?hl=ja&url=<?php echo get_permalink() ?>'+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title),'_blank');})();">
            <i class="icon-googleplus"></i>
            <span class="sp-hide">Google+でシェア</span>
          </a>
          <a id="share_line" href="http://line.naver.jp/R/msg/text/?LINE%E3%81%A7%E9%80%81%E3%82%8B%0D%0Ahttp%3A%2F%2Fline.naver.jp%2F">
            <i class="icon-line"></i>
            <span class="sp-hide">LINEで送る</span>
          </a>
          <a id="share_hatena" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink() ?>&title=<?php echo urlencode( the_title( "" , "" , 0 ) ) ?>%20%2d%20No%2e1026" target="_blank">
            <i class="icon-hatena"></i>
            <span class="sp-hide">はてなブックマーク</span>
          </a>
          
          </div>





        </div>