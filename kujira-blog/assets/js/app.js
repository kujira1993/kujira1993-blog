jQuery(function($){
    
    $(".post_ttl").each(function(){
        var $postTtl = $('.post_txt');
        var cutFigure = '18'; // カットする文字数
        var afterTxt = '...'; // 文字カット後に表示するテキスト
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure))
 
        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt).css({visibility:'visible'});
        } else if(cutFigure >= textLength) {
            $(this).css({visibility:'visible'});
        }
    });

    $(".post_txt").each(function(){
        var $postTxt = $('.post_txt');
        var cutFigure = '30'; // カットする文字数
        var afterTxt = '...'; // 文字カット後に表示するテキスト
        var textLength = $(this).text().length;
        var textTrim = $(this).text().substr(0,(cutFigure))
 
        if(cutFigure < textLength) {
            $(this).html(textTrim + afterTxt).css({visibility:'visible'});
        } else if(cutFigure >= textLength) {
            $(this).css({visibility:'visible'});
        }
    });

    var topBtn = $('#page-top');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });

    $('#jsMenuBtn').click(function() {
        $(".global_nav").slideToggle();
    });

    $(".imgChange").click(function() {
        var imgSrc = $(this).attr("src");

        if($(this).attr("class") == "imgChange_on"){
            $(this).attr("class", "imgChange_off")
            imgSrc = imgSrc.replace(/(_on)/, '')
            $(this).attr("src", imgSrc)

            return
        }

        $(this).attr("class", "imgChange_on")
        $(this).attr("src", imgSrc.replace(/(\.gif|\.jpg|\.png)/g, '_on$1'))

    });

var now_post_num = 6; // 現在表示されている数
var get_post_num = 6; // もっと読むボタンを押した時に取得する数
  
jQuery("#more a").live("click", function() {
      
    jQuery("#more").html('<img class="ajax_loading" src="http://wordpress/wp-content/themes/kujira-blog/img/ajax-loader.gif" />');
     
    jQuery.ajax({
        type: 'post',
        url: 'http://wordpress/wp-content/themes/kujira-blog/more.php',
        data: {
            'now_post_num': now_post_num,
            'get_post_num': get_post_num
        },
        success: function(data) {
            now_post_num = now_post_num + get_post_num;
            data = JSON.parse(data);
            jQuery(".main").append(data['html']);
            jQuery("#more").remove();
            if (!data['noDataFlg']) {
                jQuery(".main").append('<div id="more"><a href="#" class="more_btn">MORE POSTS</a></div>');
            }
        }
    });
    return false;
});


});