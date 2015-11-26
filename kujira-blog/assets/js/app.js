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

    var now_post_num = 3; // 現在表示されている数
    var get_post_num = 3; // 一度に取得する数
     
    $(function() {
        $("#more_disp a").live("click", function() {
             
            $("#more_disp").html('<img class="ajax_loading" src="http:8888//localhost/kujira_blog/wp-content/themes/ajax_loading/images/ajax_loader.gif" />');
             
            $.ajax({
                type: 'post',
                url: 'http://localhost:8888/kujira_blog/wp-content/themes/ajax_loading/more-disp.php',
                data: {
                    'now_post_num': now_post_num,
                    'get_post_num': get_post_num
                },
                success: function(data) {
                    now_post_num = now_post_num + get_post_num;
                    data = JSON.parse(data);
                    $(".post_wrap").append(data['html']);
                    $("#more_disp").remove();
                    if (!data['noDataFlg']) {
                        $("#container").append('<div id="more_disp"><a href="#" class="more_btn">MORE POSTS</a></div>');
                    }
                }
            });
            return false;
        });
    });

});