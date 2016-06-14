$(document).ready(function(e) {
    $(window).resize(e, function(){
        handleStageResize();
    });
    handleStageResize();
    
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
}