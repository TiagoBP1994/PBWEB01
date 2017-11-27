$(document).ready(function (){

   $('.profile-completion-header .close-btn').click(function () {
        $(this).parent().parent().fadeOut();
   });

   $('.job-container:last').addClass("no-border-right");

   console.log($('.job-container:last'));
      
});

