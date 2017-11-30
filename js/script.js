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

   
   //Toggle contact panel
    $('.contact-panel .close-btn').click(function () {
        $('.contact-panel').addClass('hide');
        $('.contact-panel').removeClass('show');
    });
    $('.main .header .side-header .contact-btn').click(function () {
        $('.contact-panel').addClass('show');
        $('.contact-panel').removeClass('hide');
    });

});

