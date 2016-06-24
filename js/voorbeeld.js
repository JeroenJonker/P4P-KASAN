$(document).ready(function(e) {
    $(window).resize(e, function(){
        handleStageResize();
    });
    handleStageResize();
    
    $(".logo").click(function() {
    $('html, body').animate({
        scrollTop: $(".vimeoPlayers").offset().top -70
    }, 2000)});
    
    $(".logo, #0, #1, #2, #3, #4").hover(function(){
        $(this).css('cursor','pointer');
    });
    
    $("#0").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr0").offset().top -70
    }, 2000)});
    
    $("#1").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr1").offset().top -70
    }, 2000)});
        
    $("#2").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr2").offset().top -70
    }, 2000)});
    
    $("#3").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr3").offset().top -70
    }, 2000)});
    
    $("#4").click(function() {
    $('html, body').animate({
        scrollTop: $("#boxnr4").offset().top -70
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

var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); // Change image every 2 seconds
};

var slideIndext = 0;
var feed = new Instafeed({
    get: 'user',
    userId: '3286950181',
    accessToken: '3286950181.5142e9d.68651a14c72a4840935e943000d50104',
    resolution: 'low_resolution',
    template: '<a href="{{link}}"><img class="animation" src="{{image}}" /></a>',
    after: function carouselt() {
                var it;
                var xt = document.getElementsByClassName("animation");
                for (it = 0; it < xt.length; it++) {
                    xt[it].style.display = "none"; 
                }
                slideIndext++;
                if (slideIndext > xt.length) {slideIndext = 1} 
                xt[slideIndext-1].style.display = "block"; 
                setTimeout(carouselt, 2000); // Change image every 2 seconds
            }
});
feed.run();