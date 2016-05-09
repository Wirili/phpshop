/**
 * Created by w3324 on 2016/5/6.
 */
$(function(){
    $('.menu-list').on('mouseover',function(){
        $(this).addClass('nav-hover');
    });
    $('.menu-list').on('mouseout',function(){
        $(this).removeClass('nav-hover');
    });
    $('.menu-list > a').on('click',function(){
        if(!$('body').hasClass('mini')) {
            var t = $(this);
            if (t.parent('.menu-list').hasClass('nav-active')) {
                t.next('.sub-menu-list').slideUp(200, function () {
                    t.parent('.menu-list').removeClass('nav-active')
                });
            } else {
                visibleSubMenuClose();
                t.parent('.menu-list').addClass('nav-active')
                t.next('.sub-menu-list').slideDown(200);
            }
        }
    });

    function visibleSubMenuClose() {
        $('.menu-list').each(function() {
            var t = $(this);
            if(t.hasClass('nav-active') && t.find('> ul').length > 0) {
                t.find('> ul').slideUp(200, function(){
                    t.removeClass('nav-active');
                });
            }else{
                t.removeClass('nav-active');
            }
        });
    }
});
