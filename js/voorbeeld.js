$(document).ready(function(e) {
    $(window).resize(e, function(){
        handleStageResize();
    });
    handleStageResize();
    
    $("#0").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr0").offset().top
    }, 2000)});
    
    $("#1").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr1").offset().top
    }, 2000)});
        
    $("#2").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr2").offset().top
    }, 2000)});
    
    $("#3").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr3").offset().top
    }, 2000)});
    
    $("#4").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr4").offset().top
    }, 2000)});
    
//    $("form").hide();
//    
//    $("button").click(function(){
//        $("form").slideToggle('slow');
//    });
});

function handleStageResize(){
    var videoWidth = $('.vimeoPlayers').width();
    var aspectRatio = 16/9;
    var videoHeight = videoWidth / aspectRatio;
    $('.vimeoPlayers').css({height: videoHeight+"px"});
};