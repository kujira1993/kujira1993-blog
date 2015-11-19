jQuery(function($){
    
    $(".post_ttl").each(function(){
        var $postTtl = $('.post_txt');
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


});