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



   //Sidebar change active class

//    function addActiveClass(){
//        //Remove menu highlight
//           $(".side-bar .main-ul .menu-highlight").remove();
//           $(".side-bar .main-ul .active").removeClass('active');

//        var menuHighlight = '<div class="menu-highlight"></div>'

//        if ($("#dashboard").length > 0) {
//            $(".side-bar .main-ul .main-li:nth-child(1)").addClass('active');
//            $(menuHighlight).prependTo('.side-bar .main-ul');
//            console.log("dashboard");
//        } 

//        if ($("#browse-job").length > 0) {
//            $(".side-bar .main-ul").find('.menu-job').addClass('active');
//            $(menuHighlight).prependTo('.side-bar .main-ul:nth-child(2)');
//            console.log("dashboard");
//        } 
    
//    }

   addActiveClass();

});

