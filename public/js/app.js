$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
    
$(document).ready(function(){
    $(".msg").hide();
    $(".menu li").mouseenter(function(){
        $(this).css({"margin-left": "-90px", "transition": "0.5s"});
    });
    $(".menu li").mouseleave(function(){
        $(this).css({"margin-left": "0px", "transition": "0.5s"});
    });

});