$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(document).ready(function(){

	var width = screen.width;

    if (width == 1920) {
        width = width - 50;
    } else if (width == 1280) {
        width = width - 50;
    } else {
        width = width - 65;
    }

	$(".cover").css("height", screen.height);

	$(".menu").css("margin-left", width + "px");

    $(".menu li").mouseenter(function(){
        $(this).css({"margin-left": "-90px", "transition": "0.5s"});
        $(this).children("a").css({"color": "#a9a9a9"});
    });
    $(".menu li").mouseleave(function(){
        $(this).css({"margin-left": "0px", "transition": "0.5s"});
        $(this).children("a").css({"color": "#fff"});
    });

});