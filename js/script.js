$(document).ready(function () {

    //progress
    var progression = true;

    if (progression == false) {
        $('.profile-completion-section').addClass('hide');
    }

    $('.profile-completion-header .close-btn').click(function () {
        $(this).parent().parent().fadeOut();
        var progression = false;
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

    //SHOW / HIDE NOTIFICATION
    $('.notification-btn').click(function () {
        // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
        $('#notifications').fadeToggle('fast', 'linear', function () {
            if ($('#notifications').is(':hidden')) {
                $('.notification-btn').css('background-color', '#D1D1D1');
            } else $('.notification-btn').css('background-color', '#D1D1D1');
        });
        return false;
    });
    // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
    $(document).click(function () {
        $('#notifications').hide();
    });
    $('#notifications').click(function () {
        return false; // DO NOTHING WHEN CONTAINER IS CLICKED.
    });


    // SHOW / HIDE EXPERIENCE        
    $('.filter-experience').click(function () {
        // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
        $('#experience-panel').fadeToggle('fast', 'linear', function () {});
        return false;
    });
    // HIDE PANEL WHEN CLICKED ANYWHERE ON THE PAGE.
    $(document).click(function () {
        $('#experience-panel').hide();
    });
    $('#experience-panel').click(function () {
        return false; // DO NOTHING WHEN CONTAINER IS CLICKED.
    });

});