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

    $(document).ready(function () {

        $('.notification-btn').click(function () {

            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            $('#notifications').fadeToggle('fast', 'linear', function () {
                if ($('#notifications').is(':hidden')) {
                    $('.notification-btn').css('background-color', '#2E467C');
                }
                else $('.notification-btn').css('background-color', '#D1D1D1');   
            });

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        $(document).click(function () {
            $('#notifications').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if ($('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                $('#noti_Button').css('background-color', '#2E467C');
            }
        });

        $('#notifications').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });

});

