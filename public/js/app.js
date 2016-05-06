/**
 * Created by w3324 on 2016/5/6.
 */
$(function(){
    $('.menu-list > a').on('click',function(){
        if($(this).parent('.menu-list').hasClass('nav-active')) {
            $(this).parent('.menu-list').removeClass('nav-active')
            $(this).next('.sub-menu-list').hide();
        }else{
            $(this).parent('.menu-list').addClass('nav-active')
            $(this).next('.sub-menu-list').show();
        }
    });
});
