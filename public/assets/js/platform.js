//jQuery.noConflict();
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;

$(function() {
    function menuPosition() {

        var position4menu = $(window).width() <= 681 ? "0px" : "36px";
        var scrollpos = $(window).scrollTop();
        var menu = $('.clinik-mainmenu');

        if(scrollpos >= 36) {
            menu.css({
                "top" : "0",
                "left" : "0",
                "position" : "fixed",
                "z-index" : "6",
            }).addClass('s-header__shrink');
        }
        else {
            menu.css({
                "position" : "absolute",
                "top" : position4menu,
            }).removeClass('s-header__shrink');
        }
    }

    if(!isMobile) {
        $(function() {
            $(window).scroll(function () {
                menuPosition();
            });
            $(window).resize(function () {
                menuPosition();
            });
        });
    }
});