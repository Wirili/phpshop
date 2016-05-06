/**
 * Created by w3324 on 2016/5/6.
 */
$(function(){
    $('.menu-list > a').on('click',function(){

        if($(this).parent('.menu-list').hasClass('nav-active')) {
            $(this).parent('.menu-list').removeClass('nav-active')
            $(this).next('.sub-menu-list').hide();
        }else{
            visibleSubMenuClose();
            $(this).parent('.menu-list').addClass('nav-active')
            $(this).next('.sub-menu-list').show();
        }
    });

    function visibleSubMenuClose() {
        $('.menu-list').each(function() {
            var t = $(this);
            if(t.hasClass('nav-active')) {
                t.find('> ul').slideUp(200, function(){
                    t.removeClass('nav-active');
                });
            }
        });
    }
});
