$(document).ready(function (){

    //progress
    var progression = true;

    if(progression == false){
        $('.profile-completion-section').addClass('hide');
    }

   $('.profile-completion-header .close-btn').click(function(){
        $(this).parent().parent().fadeOut();
        var progression = true;
   });

//Toggle menu
   $('.main-container .side-bar .close-menu').click(function () {
        $('.side-bar').addClass('hide');
        $('.side-bar').removeClass('show-flex');
    });
    $('.main-container .mobile-header .mobile-menu').click(function () {
        $('.side-bar').addClass('show-flex');
        $('.side-bar').removeClass('hide');
   });

});

