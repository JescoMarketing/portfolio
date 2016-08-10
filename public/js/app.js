$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(document).ready(function(){
	var width = screen.width -65;
	width = width;
	$(".cover").css("height", screen.height);
	$(".menu").css("margin-left", width + "px");

    $(".menu li").mouseenter(function(){
        $(this).css({"margin-left": "-90px", "transition": "0.5s"});
        $(this).children("a").css({"color": "#13DAFA"});
    });
    $(".menu li").mouseleave(function(){
        $(this).css({"margin-left": "0px", "transition": "0.5s"});
        $(this).children("a").css({"color": "#fff"});
    });

});